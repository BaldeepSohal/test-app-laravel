window.runCommand = function() {
        if($('input[name=command]').val() == ""){
            alert('Please enter command!', 'danger')
            return;
        }
       
        $.ajax({

            url : $('.run').attr('data-url'),
            type : "POST",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            data : {
                "command" : $('input[name=command]').val()
            },
            dataType:"json",
            success : function(data) {              
                // console.log("Data: "+data.output);
                $('.output').show();
                $('.output').find('p').text(data.output);
            },
            error : function(request,error)
            {
                console.log("Request: "+JSON.stringify(request));
            }
        });
     };


     const alertPlaceholder = document.getElementById('alertPlaceholder')

const alert = (message, type) => {
    alertPlaceholder.innerHTML = '';
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

$(document).on("keyup", "input[type='text']", function() {
    var empty = false;
    if (($(this).val() == '')) {
        empty = true;
      }
  
    if (empty) {
      $('.run').attr('disabled', 'disabled');
    } else {
      $('.run').removeAttr('disabled');
    }
  }); 