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





			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	// import 'bootstrap/dist/css/bootstrap.css'

// import axios from 'axios'



	var app = new Vue({
		el: '#vueapp',
		data: {
			info: null,

		    array: [],

		 //    type: [],
		 //    side: [],
		 // content: [],
		 //  height: [],
		 //   width: [],
		 //   price: [],
		 //  locate: [],
		 //  date: [],
		   value: '',
 form_item_value: [],
 form_item_array: [],
 	   form_item: 1
		},
		methods: {
			add_item() {
				console.log('Test')
				this.form_item_array.push(++this.form_item-1)
			},
			save() {
				console.log('Test')
				console.log(this.array)

				// axios.post('/someurl', {array: this.array, date: this.date, type: this.type, side: this.side, content: this.content,  height: this.height, width: this.width,  price: this.price, locate: this.locate})
				 axios.post('/someurl', {array: this.array})
				  .then((response) => {
				  console.log(response);
				});

				// axios
				// 	.post('/someurl', params: {name: 'test',geo: 'Гео'})
				// 	.then(response => {
				// 		console.log(response)
				// 	})




			}
		}
	})
</script>

@endsection

<link rel="stylesheet" href="{{ asset('/css/admin-style.css') }}">
