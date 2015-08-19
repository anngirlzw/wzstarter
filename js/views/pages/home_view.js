define([
  'pages/page_view',
  'text!template/home.php'
], function(PageView, Template){
	var HomeView = PageView.extend({
		template: _.template( Template ),
		id:"home",
		onready:function(){
			var _t = this;
			_t.runTyping();
			_t.mouseMoveMatrix();
			// _t.checkForm();


			$('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: base_url + "/main/sendEmail",
            data: $('form').serialize(),
            success: function () {
              alert(data);
            }
          });

        });
		},
		runTyping:function() {
			var element = document.querySelector('#output');
			var typeSpeed = 100; // 80 ms
			var deleteSpeed = 30; // 30 ms
			var deleteAfter = 1000; // 1 second
			var items = [
			  "I code cool websites",
			  "I like drawing",
			  // 'Bem-vindo',
			  // 'Vitejte',
			  // 'Tervetuloa',
			  // 'Velkomen',
			  // 'Witamy',
			  // 'Welkom',
			  // 'Velkommen',
			  // 'Bienvenue',
			  // 'Willkommen'
			];

			/* END SETTINGS */

			var sentence = 0;
			var currentChar = 0;
			var deleteInterval = null;

			function type() {
			  if (sentence >= items.length) {
			    sentence = 0;
			  }

			  var chars = items[sentence].split("");

			  setTimeout(function() {
			    if (currentChar >= chars.length) {
			      setTimeout(function() {
			        sentence++;

			        deleteInterval = setInterval(function() {
			          element.innerHTML = element.innerHTML.substr(0, currentChar - 1);
			          currentChar--;

			          if (currentChar == 1) {
			            clearInterval(deleteInterval);
			            type();
			          }
			        }, deleteSpeed);
			      }, deleteAfter);

			      return;
			    }

			    element.innerHTML += chars[currentChar];
			    currentChar++;

			    type();
			  }, typeSpeed);
			}

			type();
		},

		mouseMoveMatrix:function() {

		  $('.tile')
		    // tile mouse actions
		    .on('mouseover', function(){
		      $(this).children('.photo').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
		      $(this).children('.project-label').css('background-color', $(this).attr('data-label-color'));
		    })
		    .on('mouseout', function(){
		      $(this).children('.photo').css({'transform': 'scale(1)'});
		      $(this).children('.project-label').css('background-color', 'transparent');
		    })
		    .on('mousemove', function(e){
		      $(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
		    })
		    // tiles set up
		    .each(function(){
		      $(this)
		        // add a photo container
		        .append('<div class="photo"></div>')
		        // some text just to show zoom level on current item in this example
		        // .append('<div class="txt"><div class="x">'+ $(this).attr('data-scale') +'x</div>ZOOM ON<br>HOVER</div>')
		        // add project label
		        .append('<div class="project-label"><div class="project-label-inner">' + $(this).attr('data-label') + '</div></div>')

		        // set up a background image for each tile based on data-image attribute
		        .children('.photo').css({'background-image': 'url('+ $(this).attr('data-image') +')'})

		    })

		},

		// checkForm:function() {
		// 	function checkForm() {
		// 	 name = document.getElementById("name").value;
		// 	 email = document.getElementById("email").value;
		// 	 comment = document.getElementById("comment").value;
			 
		// 	 if (name == "")
		// 	 {
		// 	 hideAllErrors();
		// 	 document.getElementById("nameError").style.display = "inline";
		// 	 document.getElementById("name").select();
		// 	 document.getElementById("name").focus();
		// 	 return false;
		// 	 }
		// 	 else if (email == "")
		// 	 {
		// 	 hideAllErrors();
		// 	 document.getElementById("emailError").style.display = "inline";
		// 	 document.getElementById("email").select();
		// 	 document.getElementById("email").focus();
		// 	 return false;
		// 	 }
		// 	 else if (comment == "")
		// 	 {
		// 	 hideAllErrors();
		// 	 document.getElementById("commentError").style.display = "inline";
		// 	 document.getElementById("comment").select();
		// 	 document.getElementById("comment").focus();
		// 	 return false;
		// 	 }
		// 	 if (!checkEmail(email))
		// 	 {
		// 	 alert('Email address is invalid');
		// 	 return false;
		// 	 }
		// 	 return true;
		// 	}
			 
		// 	function hideAllErrors() {
		// 	 document.getElementById("nameError").style.display = "none";
		// 	 document.getElementById("emailError").style.display = "none";
		// 	 document.getElementById("commentError").style.display = "none";
		// 	}
			 
		// 	function checkEmail(inputvalue) {
		// 	 var pattern = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
		// 	 return pattern.test(inputvalue);
		// 	}
		// },



		onclose:function(){
		},
	});
	return HomeView;
});