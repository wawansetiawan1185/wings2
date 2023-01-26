<html>
<head>
<title></title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


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
      <input class="form-control mr-sm-2" type="text" value="{{Session::get('nama')}}" aria-label="Search"disabled><a href="{{url('/report')}}">
      <?php if(Session::get('status')=='admin'){
echo "<button class='btn btn-outline-success my-2 my-sm-0' type='button'>Report Penjualan</button>";
      }else{
      	
      }?></a>
      <a href="{{url('/keluaradmin')}}"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Logout</button></a>
    </form>
  </div>
</nav>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Transaction</th>
                <th>user</th>
                <th>total</th>
                <th>date</th>
                <th>item</th>
                
            </tr>
        </thead>
        <tbody>
        	@foreach($datapembelian as $h)
            <tr>
                <td>{{$h->id}}</td>
                <td>{{$h->user}}</td>
                <td>{{$h->sub_total}}</td>
                <td>{{$h->date}}</td>
                <td>{{$h->product_name}}</td>
              
            </tr>
          @endforeach
            
        </tbody>
        <tfoot>
          <tr>
                <th>Transaction</th>
                <th>user</th>
                <th>total</th>
                <th>date</th>
                <th>item</th>
                
            </tr>
        </tfoot>
    </table>
    </body>
    <script>
    	$(document).ready(function () {
    $('#example').DataTable();
});
    </script>

    </html>