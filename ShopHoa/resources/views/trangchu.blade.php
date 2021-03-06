@extends('master')
@section('content')
	<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									@foreach($slide as $sl)
									<!-- THE FIRST SLIDE -->
								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="qt69admin/image/slide/{{$sl->image}}" data-src="qt69admin/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('qt69admin/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
											</div>
						        </li>
						        @endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sanphamc)}} sản phẩm </p>
								<div class="clearfix"></div>
							</div>
								<br>
							<div class="row" id="rowborder">
								@foreach($sanpham as $sp)

								<div class="col-sm-3" id='col3'>
									<p class="single-item-title">{{$sp->name}}</p>
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsp',$sp->id)}}"><img src="qt69admin/image/product/{{$sp->image}}" alt="cường đẹp trai =)))" height="243px" width="100%"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-price">
												@if($sp -> giakm!=0)
													<span class="flash-del">{{$sp->gia}} VND</span>
													<span class="flash-sale">{{$sp->giakm}} VND</span>
													<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
												@else
													<span class="flash-sale">{{$sp->gia}} VND</span>
												@endif
											</p>
										</div>
										@if(Auth::check())
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('add/'.$sp->id.'/'.Auth::user()->id)}}"> + Giỏ hàng <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
											<br>
											<br>
										</div>
										@else
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href={{route('logincart')}}> + Giỏ hàng <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
											<br>
											<br>
										</div>
										@endif
									</div>
								</div>
								@endforeach
							</div>
							<div>{{$sanpham->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>
						<div class="beta-products-list">
							<h4>Sản phẩm khuyến mãi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($spkmc)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							
							<div class="row" id="rowborder">
								@foreach($spkm as $top)
								<div class="col-sm-3" id='col3'>
									<p class="single-item-title">{{$top->name}}</p>
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsp',$top->id)}}"><img src="qt69admin/image/product/{{$top->image}}" alt="" height="243px" width="100%"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-price">
												@if($top -> giakm!=0)
													<span class="flash-del">{{$top->gia}} VND</span>
													<span class="flash-sale">{{$top->giakm}} VND</span>
													<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
												@else
													<span class="flash-sale">{{$top->gia}} VND</span>
												@endif

											</p>
										</div>
										@if(Auth::check())
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('add/'.$sp->id.'/'.Auth::user()->id)}}""> + Giỏ hàng <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
											<br>
											<br>
										</div>
										@else
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href={{route('logincart')}}> + Giỏ hàng <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
											<br>
											<br>
										</div>
										@endif
									</div>
								</div> <!-- .beta-products-list -->
								@endforeach
								</div>
								<div>{{$spkm->links()}}</div>
							</div>
							</div>
						</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->	
@endsection