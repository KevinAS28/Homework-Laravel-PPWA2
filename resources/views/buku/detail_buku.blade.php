<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detail Buku</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/detail_product.css')}}">
  </head>

  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{$buku->foto}}" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						{{-- <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul> --}}
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$buku->judul}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">
                            {{$buku->judul}}<br/>
                            Penulis: {{$buku->penulis}}<br/>
                            Tanggal terbit: {{$buku->tgl_terbit}}<br/>
                        </p>
						<h4 class="price">current price: <span>Rp.{{$buku->harga}}</span></h4>
						<p class="vote"> <strong>({{$buku->love}} likes)</strong></p>
						{{-- <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5> --}}
						{{-- <h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5> --}}
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">Beli</button>
							<a href="{{ route('buku.love', ['id' => $buku->id]) }}">
								<button class="like btn btn-default" type="button"><span
										class="fa fa-heart"></span></button></a>
						</div>
						<br/><br/>
						<form action="{{route('buku.post_comment')}}" method="post">
							@csrf
							<textarea name="comment" id="" cols="40" rows="3"></textarea>
							<input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
							<input type="hidden" name="buku_id" value="{{$buku->id}}"/>
							<br>
							<button type="submit">Komentar</button>
						</form>
						<br/><br/>
						<strong class="product-description">Comments: </strong><br/>
						<table>
							@foreach ($user_comments as $uc)
								<tr>
									<td width="150px">{{$uc['user']}}</td>
									<td width="150px">{{$uc['comment']}}</td>
									<td width="150px">{{$uc['updated']}}</td>
								</tr>	
							@endforeach
							{{-- <b>{{$buku_id}}-{{print_r($user_comments)}}</b> --}}
							

						</table>
					</div>
				</div>
				
			</div>
			
		</div>

	</div>

	
  </body>
</html>
