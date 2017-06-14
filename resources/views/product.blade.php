@extends('master')

@section('title','书籍列表')

@section('content')
	<div class="weui_cells_title">带图标、说明、跳转的列表项</div>
	<div class="weui_cells weui_cells_access">
		@foreach($products as $product)
		<a class="weui_cell" href="/product/{{$product->id}}">
			<div class="weui_cell_hd"><img class="bk_preview" src="{{$product->preview}}"></div>
			<div class="weui_cell_bd weui_cell_primary">
				<div style="margin-bottom: 10px">
					<span class="bk_name" >{{$product->name}}</span>
					<span class="bk_price" style="float: right">￥{{$product->price}}</span>
				</div>
					<p class="bk_sumamry" >{{$product->summary}}</p>
			</div>
			<div class="weui_cell_ft"></div>
		</a>
		@endforeach
	</div>

@endsection

@section('my-js')
@endsection