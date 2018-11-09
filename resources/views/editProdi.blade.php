<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    }

    body{
        background: #c0c0c0;
    }

    div.konten{
        background: #e9e9e6;
        width: 350px;
        margin: 222px auto 0;
        border-radius: 16px;
        min-height: 256px;
        overflow: hidden;
    }

    div.kepala{
        background: #05bdf5;
        padding: 10px 22px;
        height: 60px;
    }

    div.kepala h2.judul{
        color: #fff;
        font-weight: normal;
        line-height: 40px;
        display: inline-block;
    }

    div.lock{
        background-image: url("lock.jpg");
        background-position: center;
        background-size: 38px;
        display: inline-block;
        width: 25px;
        height: 25px;
        margin-top: 8px;
        float: left;
        margin-right: 10px;
    }

    div.artikel{
        padding:10px 22px 0;
        color: #808080;
    }

    div.artikel div.grup{
        margin: 16px 0;
    }

    div.artikel div.grup label,
    div.artikel div.grup input{
        display: block;
    }

    div.artikel div.grup label{
        font-size: 13px;
        margin-bottom: 10px;
    }

    div.artikel div.grup input[type="text"],
    div.artikel div.grup input[type="password"]{
        width: 100%;
        height: 30px;
        padding: 0 10px;
        background: #eeeeee;
        border:none;
        color: #808080;
    } 
    </style>
</head>
<body>
<div class="konten">
    <div class="kepala">
        <div class="lock"></div>
            <h2 class="judul">Daftar Prodi</h2>
        </div>
    <div class="artikel">

<form action="/prodi/{{$prodiEdit[0]->id}}" method="POST">
	@csrf
	@method('PUT')

    <label for="prodi">Prodi</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1">@</span>
            </div>
        <input type="text" name="prodi" class="form-control" value="{{$prodiEdit[0]->prodi}}" placeholder="Enter prodi" aria-label="prodi" aria-describedby="basic-addon1" required>
    </div>

<div class="row m-3">
    <div class="text-center">
        <input type="submit" value="Simpan" class="btn btn-primary shadow">
    </div>
</div><br>

</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>