<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 File Upload using jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="/eruda/eruda.js"></script>
<script>eruda.init();</script>
      <script src="{{ asset('dist/jquery.min.js') }}"></script>
      <style>
      body{
        
      }
      .imgr{
  border-radius: 6px;
  height: 120px;
  width: 120px;
}
        p{
          color: red;
        }
        .kkkk{
          display: none;
          font-weight: bold;
          color: green;
        }
      </style>
</head>
<body>

    <h2>File Upload</h2>
   <div id="loading" class="kkkk">uploading..</div>
    <form id="fileUploadForm" enctype="multipart/form-data">
      @csrf
        <input type="file" name="file" id="file">
        <p id="file_error"></p>
        
        <input type="text" placeholder="kichu likho" name="name">
        <p id="name_error"></p>
        
        <button type="submit">Upload</button>
    </form>
    
    <script>
    
       
            $('#fileUploadForm').on('submit', function(e) {
                e.preventDefault();
                $("#loading").show();
                const token = $('input[name="_token"]').val();
                let formData = new FormData(this);
                $('#name_error').text('');
                $('#file_error').text('');
              //  console.log(formData);
                
                $.ajax({
                    url: '{{ route('newbngg') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                   processData: false,
                    
                    success: function(data) {
                      console.log(data);
                     $("#loading").hide();
                      
                      $(`#name_error`).text('');
                        $('#fileUploadForm')[0].reset();
                          alert(data.success);
                       
                        
                    },
                    error: function(error) {
                         $("#loading").hide();
                         $.each(error.responseJSON.errors, function(key, user) {
                           if(user){
            $(`#${key}_error`).text(user);
               
                           }else{
                              $(`#${key}_error`).text('');
                             
                           }    
            });
                        
                    },
                   
                });
            });
            
              
      
      
      
    </script>
    
    <br>
    @foreach($data as $kkk)
   <img class="imgr" src="upload/{{ $kkk->file }}" alt="image">
    <h1>{{ $kkk->name }}</h1>
    <br>
    @endforeach

</body>
</html>