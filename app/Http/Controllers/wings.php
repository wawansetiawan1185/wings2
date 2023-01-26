<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\ModelUser2;
use Illuminate\Support\Facades\Session;
class wings extends Controller
{
    public function index(){
    	return view('welcome');
    }
    public function home(){

    	$databarang=DB::table('product')->paginate(100);
    	return view('home',compact('databarang'));
    }
    public function detail($id){
    	$databarang=DB::table('product')->where('id',$id)->get();
    	return view('detail',compact('databarang'));
    }
    public function checkoutpage(){
    	return view('checkoutpage');
    }
    public function daftarwings(){
    	return view('daftar');
    }
    public function simpandata(Request $request){

$user = $request->input('user');

$pass1 = bcrypt($request->input('password'));

$data3=array("user"=>$user,"password"=>$pass1,"status"=>'tamu');
DB::table('login')->insert($data3);
return view('welcome');

    }
    public function masuk(Request $request){
    		$user = $request->input('user');
$password = $request->input('password');
$status1="tamu";
$statusadmin="admin";
$hashed = Hash::make($password);
$status = ModelUser2::where('status', '=', $status1)->first();
$status2 = ModelUser2::where('status', '=', $statusadmin)->first();

 $user = ModelUser2::where('user', '=', $user)->first();
 if($status){

    if($user){


       if(Hash::check($password,$user->password)){
                Session::put('nama',$user->user);
                              
                Session::put('pass',$user->password);
                Session::put('id',$user->id);
                 Session::put('status',$user->status);
                Session::put('login',TRUE);
  $databarang=DB::table('product')->paginate(100);
    	return view('home',compact('databarang'));
 
  }else{
    return redirect('/')->with('alert','Password Yang Anda Masukkan Salah');
  }

}else{

           return redirect('/')->with('alert','User Yang Anda Masukkan Salah');
     
}
}else if($status2){
 if($user){


       if(Hash::check($password,$user->password)){
                Session::put('nama',$user->user);
                              
                Session::put('pass',$user->password);
                Session::put('id',$user->id);
                Session::put('status',$user->status);
                Session::put('login',TRUE);
  $databarang=DB::table('product')->paginate(100);
    	return view('home',compact('databarang'));
 
  }else{
    return redirect('/')->with('alert','Password Yang Anda Masukkan Salah');
  }

}else{

           return redirect('/')->with('alert','User Yang Anda Masukkan Salah');
     
}
}
    }

public function beli(Request $request){
	$user=$request->input('user');
	$date=$request->input('date');
	$product_kode=$request->input('product_kode');
	$price=$request->input('price');
	$unit=$request->input('unit');
	$gambar=$request->input('gambar');
	$currency=$request->input('currency');
	$quantity=$request->input('quantity');
	$product_name=$request->input('product_name');
	$simpan=array('product_code'=>$product_kode,'price'=>$price,'quantity'=>$quantity,'unit'=>$unit,'sub_total'=>'0','currency'=>$currency,'date'=>$date,'gambar'=>$gambar,'user'=>$user,'product_name'=>$product_name);
	DB::table('transaksi_detail')->insert($simpan);
	$simpan2=array('user'=>$user,'total'=>'0','date'=>$date);
	DB::table('transaksi_header')->insert($simpan2);
	$datapembelian=DB::table('transaksi_detail')->where('user',$user)->where('date',$date)->get();

	return view('checkoutpage',compact('datapembelian'));
	
}
public function simpanpembelian(Request $request){
	$user=$request->input('user');
	$date=$request->input('date');
$unit=$request->input('unit');
$harga_asli=$request->input('harga_asli');
$totalharga= $unit * $harga_asli;
	$ubah1=array('sub_total'=>$totalharga);
DB::table('transaksi_detail')->where('user',$user)->update($ubah1);
	$ubah2=array('total'=>$totalharga);
DB::table('transaksi_header')->where('user',$user)->update($ubah2);
$databarang=DB::table('product')->paginate(100);
return view('home',compact('databarang'));	


}

public function keluaradmin(){
        Session::flush();
    	   Session::regenerate();
    	   return view('welcome');
    }

public function report(){
	$datapembelian=DB::table('transaksi_detail')->paginate(100);
	return view('report',compact('datapembelian'));
}
}
