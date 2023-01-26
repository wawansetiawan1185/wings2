<html>
<title>Selamat Datang Di Wings</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');body{background-color: #eeeeee;font-family: 'Open Sans',serif;font-size: 14px}.container-fluid{margin-top:70px}.card-body{-ms-flex: 1 1 auto;flex: 1 1 auto;padding: 1.40rem}.img-sm{width: 80px;height: 80px}.itemside .info{padding-left: 15px;padding-right: 7px}.table-shopping-cart .price-wrap{line-height: 1.2}.table-shopping-cart .price{font-weight: bold;margin-right: 5px;display: block}.text-muted{color: #969696 !important}a{text-decoration: none !important}.card{position: relative;display: -ms-flexbox;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: 0px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.dlist-align{display: -webkit-box;display: -ms-flexbox;display: flex}[class*="dlist-"]{margin-bottom: 5px}.coupon{border-radius: 1px}.price{font-weight: 600;color: #212529}.btn.btn-out{outline: 1px solid #fff;outline-offset: -5px}.btn-main{border-radius: 2px;text-transform: capitalize;font-size: 15px;padding: 10px 19px;cursor: pointer;color: #fff;width: 100%}.btn-light{color: #ffffff;background-color: #F44336;border-color: #f8f9fa;font-size: 12px}.btn-light:hover{color: #ffffff;background-color: #F44336;border-color: #F44336}.btn-apply{font-size: 11px}
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Selamat Datang Di Wings</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" value="wawan" aria-label="Search"disabled>
      <a href="{{url('/report')}}">
      <?php if(Session::get('status')=='admin'){
echo "<button class='btn btn-outline-success my-2 my-sm-0' type='button'>Report Penjualan</button>";
      }else{
        
      }?></a>
      <a href="{{url('/keluaradmin')}}"> <button class="btn btn-outline-success my-2 my-sm-0" type="button">Logout</button></a>
    </form>
  </div>
</nav>
<div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($datapembelian as $g)
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="{{ URL::to('/') }}/sabun/{{ $g->gambar }}" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{$g->product_name}}</a>
                                                
                                            </figcaption>
                                        </figure>
                                          <form action="{{URL::to('/simpanpembelian')}}"method="POST">
                       
                                          {{ csrf_field() }}
                                    </td>
                                    <td> <select name="unit"id="mySelect"onchange="hasilnya()"class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select> </td>
                                        <input type="hidden"name="harga_asli"id="harga_asli"value="{{$g->price}}">
                                    <td>
                                        <div class="price-wrap"> <var class="price">{{$g->price}}</var> </div>
                                    </td>
                                   
                                </tr>
                               @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
              
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Sub Total:</dt>
                            <dd class="text-right ml-3"><p id="demo"></p></dd>
                        </dl>
                       
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong><p id="demo2"></p></strong></dd>
                        </dl>
                           <?php 
              $tanggal=date('d-M-y');?>
                           
                          
                            <input type="hidden"name="user"value="{{Session::get('nama')}}">
                            <inpu type="hidden"name="date"value="{{$tanggal}}">
                        <hr> <Button class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true"type="submit">Confirm</Button>
                    </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</body>
<script>
    function hasilnya()
           {
             var harga_asli = document.getElementById("harga_asli").value;
             var jumlah = document.getElementById("mySelect").value;
             var tot =(harga_asli * jumlah);
             document.getElementById("demo").innerHTML = tot;
              document.getElementById("demo2").innerHTML = tot;
            document.getElementById("hasil").value = tot;
                
           }
    </script>
</html>