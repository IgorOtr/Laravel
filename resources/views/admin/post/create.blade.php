@include('includes/head')


<body>
    
    @include('includes/navbar-admin')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center"><h1>Escreva os Posts abaixo</h1></div>
        </div>

        <div class="row mt-5">
            <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" value="{{csrf_token()}}" name="_token">

                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Título do Post</label>
                        <input placeholder="Título:" name="post_title" type="text" id="form6Example1" class="form-control" />
                    </div>
                  </div>
                  <div class="col">
                    <label class="form-label" for="customFile">Escolha uma imagem <span style="font-size: 10px;">(Apenas arquivos PNG, JPG e JPEG)</span></label>
                    <input name="post_image" type="file" class="form-control" id="customFile" />
                  </div>
            
                <!-- Message input -->
                <div class="form-outline mt-3 mb-4">
                    <label class="form-label" for="form6Example7">Conteúdo do Post</label>
                  <textarea placeholder="Conteúdo:" class="form-control" id="form6Example7" rows="4"></textarea>
                </div>
              
            
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Publicar</button>
              </form>
        </div>
    </div>

</body>
</html>