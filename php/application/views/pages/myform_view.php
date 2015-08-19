<form>
  <div class="contact_name">
    <span class="contact_label">Name:*</span>
    <input type="text" id="name" /><br />
    <div class="error" id="nameError">Required: Please enter your name<br /></div>
  </div> <!-- .contact_name ends -->
 
  <div class="contact_email">
    <span class="contact_label">Email:*</span>
    <input type="text" id="email" /><br />
    <div class="error" id="emailError">Required: Please enter your email address<br /></div>
  </div> <!-- .contact_email ends -->
 
  <div class="contact_comment">
    <span class="contact_label">Message:*</span>
    <textarea id="comment" rows="10" cols="35"></textarea>
    <div class="error" id="commentError">Required: Please enter a message<br /></div>
  </div> <!-- .contact_comment ends -->
 
  <div class="contact_submit">
    <input type='submit' value='Submit' />
  </div> <!-- .contact_submit ends -->
  <p><span class="contact_nb">NB: * Donotes required field</span></p>
</form>

<script type="text/javascript">

// jQuery(document).ready(function(){



// jQuery('form').on('submit', function (e) {

//           e.preventDefault();

//           jQuery.ajax({
//             type: 'post',
//             url: base_url + "/main/sendEmail",
//             data: jQuery('form').serialize(),
//             success: function () {
//               alert('form was submitted');
//             }
//           });

//         });
// });

      function checkForm() {
       name = document.getElementById("name").value;
       email = document.getElementById("email").value;
       comment = document.getElementById("comment").value;
       
       if (name == "")
       {
       hideAllErrors();
       document.getElementById("nameError").style.display = "inline";
       document.getElementById("name").select();
       document.getElementById("name").focus();
       return false;
       }
       else if (email == "")
       {
       hideAllErrors();
       document.getElementById("emailError").style.display = "inline";
       document.getElementById("email").select();
       document.getElementById("email").focus();
       return false;
       }
       else if (comment == "")
       {
       hideAllErrors();
       document.getElementById("commentError").style.display = "inline";
       document.getElementById("comment").select();
       document.getElementById("comment").focus();
       return false;
       }
       if (!checkEmail(email))
       {
       alert('Email address is invalid');
       return false;
       }
       return true;

       submitForm({name, email, comment});
      }
       
      function hideAllErrors() {
       document.getElementById("nameError").style.display = "none";
       document.getElementById("emailError").style.display = "none";
       document.getElementById("commentError").style.display = "none";
      }
       
      function checkEmail(inputvalue) {
       var pattern = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
       return pattern.test(inputvalue);
      }

      // if (checkForm()) {
      //   submitForm({name, email, comment});
      // }

        function submitForm(formData) {
        
            var data = formData;

            console.log('submitting form');
            
            // $.ajax({
            //     type: 'POST',
            //     url: base_url + "/main/sendEmail",
            //     data: data,
            //     dataType: "text",
            //     success: function( data ) {
            //         console.log( data );
            //     }
            // });

            // location.reload();


            
        }

</script>