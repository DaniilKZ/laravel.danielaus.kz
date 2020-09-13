@extends('voyager::master')
@section('content')

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

<div id="vueapp">
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1>Рекламные носители</h1>
 
				<div class="row">
					@foreach ($point as $item)
					  <div class="col-sm-6 col-md-4">
					  	<div class="bgwhite">
						    <div class="thumbnail">
						    	@if(is_null($item->photoa))
						    		<img width="100%"  height="180px" class=""  src="{{ URL::asset('/image/nophoto.svg') }}" >
						    	@else 
						    		<img width="100%"  height="180px" class=""  src="{{ URL::asset('/image/'.$item->photoa) }}" > 
						    	@endif  
						      <div class="caption col-md-12 col-sm-12 col-xs-12">
						        <h3>{{ ($item->type) ? $item->type : 'Без названия'}}</h3>
						        <p>{{ substr($item->content, 0,  100) }}...</p>
						      </div>
						    </div>
						        <p><a href="#" class="btn btn-primary edit" role="button">Редактировать</a></p>
						  </div>
					 </div>
					@endforeach
				</div>
							
			</div>
		</div>	
	</div>	
</div>

<script type="text/javascript">
	var app = new Vue({
		el: '#vueapp',
		data: { 
		},
		methods: {
			add_item() {
				
			}
		}
	})
</script>

@endsection

<link rel="stylesheet" href="{{ asset('/css/admin-style.css') }}"> 