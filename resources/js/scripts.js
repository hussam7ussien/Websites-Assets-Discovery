$(document).ready(function(){

        $('#filter').keypress(function (e) {
         var key = e.which;
         if(key == 13)  // the enter key code
          {
            $('#findSourceCode').click();
            return false;  
          }
        });   

        $('#findSourceCode').on('click',function(e){
        $("#loader").show();
        var filter = $("#filter").val();
        $.ajax({
             url: "functions.php",
             type: "POST",
             dataType: "json",
             data:{'filter':filter},
             success: function (res) {
               data = res;
               if(data.success == 1){
                   //handle html file
                    html = '<div class="list-group">';
                    html +='<a href="'+filter+'" class="list-group-item list-group-item-action" download>'+filter+'  &nbsp;  &nbsp;<i class="fa fa-download" aria-hidden="true"></i></a>';
                    html += '</div>';
                    $("#html").html(html);                  

                   //handle javascript files
                   if(data.scripts.length > 0){
                        html = '<div class="list-group">';
                        $.each(data.scripts, function(i, url){ 
                            if(url.indexOf('http') !== -1)
                                link = url;
                            else{
                                if(url.charAt(0) == '/')
                                    link = filter+url;
                                else
                                    link = filter+'/'+url;
                            }
                            html +='<a href="'+link+'" class="list-group-item list-group-item-action" download>'+url+'  &nbsp;  &nbsp;<i class="fa fa-download" aria-hidden="true"></i></a>';
                        });

                        html += '</div>';
                        $("#javascript").html(html);
                   }else{
                        $("#javascript").html('No javascripts found.');
                   }


                   //handle css files
                   if(data.styles.length > 0){
                        html = '<div class="list-group">';
                        $.each(data.styles, function(i, url){ 
                            if(url.indexOf('http') !== -1)
                                link = url;
                             else{
                                if(url.charAt(0) == '/')
                                    link = filter+url;
                                else
                                    link = filter+'/'+url;
                            }
                            html +='<a href="'+link+'" class="list-group-item list-group-item-action" download>'+url+'  &nbsp;  &nbsp;<i class="fa fa-download" aria-hidden="true"></i></a>';
                        });

                        html += '</div>';
                        $("#css").html(html);
                   }else{
                        $("#css").html('No CSS found.');
                   }


                   //handle images files
                   if(data.images.length > 0){
                        html = '<div class="list-group">';
                        $.each(data.images, function(i, url){ 
                            if(url.indexOf('http') !== -1)
                                link = url;
                            else{
                                if(url.charAt(0) == '/')
                                    link = filter+url;
                                else
                                    link = filter+'/'+url;
                            }
                            html +='<a href="'+link+'" class="list-group-item list-group-item-action" download>'+url+'  &nbsp;  &nbsp;<i class="fa fa-download" aria-hidden="true"></i></a>';
                        });

                        html += '</div>';
                        $("#images").html(html);
                   }else{
                        $("#images").html('No images found.');
                   }

                   //handle other files
                   if(data.other.length > 0){
                        html = '<div class="list-group">';
                        $.each(data.other, function(i, url){ 
                            if(url.indexOf('http') !== -1)
                                link = url;
                            else{
                                if(url.charAt(0) == '/')
                                    link = filter+url;
                                else
                                    link = filter+'/'+url;
                            }
                            html +='<a href="'+link+'" class="list-group-item list-group-item-action" download>'+url+'  &nbsp;  &nbsp;<i class="fa fa-download" aria-hidden="true"></i></a>';
                        });

                        html += '</div>';
                        $("#other").html(html);
                   }else{
                        $("#other").html('No other resources found.');
                   }

                   $("#success-message").show();
                   $("#error-message").hide();
                   $("#results-tab").show();
               }else{
                   $("#success-message").hide();
                   $("#error-message").show();
                   $("#results-tab").hide();
               }


               //hide loader and display results
               $("#loader").hide();
             }
        });

     });
});