@extends('layouts.app')

@section('title', 'Рекламные носители')

@section('content')
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js" type="text/javascript"></script> -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <div id="vueapp">
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Мои рекламы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Добавить рекламные</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                            <h3>Мои рекл</h3>
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
                        <div class="tab-pane container fade" id="menu1">
                            <h3>Добавление рекламы</h3>
                            <div class="form">
                                <form ref="form" method="POST" action="{{url('someurl')}}" >
                                    <div class="form__item" >
                                        <h2>Точка 1</h2>

                                        <div class="form-group">
                                            <label for="">Тип носителя</label>
                                            <select v-model="array[0]['type']" required  id="">
                                                <option value="Билбор">Билбор</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Сколько сторон у реккламного носителя?</label>
                                            <select v-model="array[0]['side']" required  id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Фото стороны А</label>
                                                    <input  class="form-control photo "  type="file"  >
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Фото стороны В</label>
                                                    <input  class="form-control photo"  type="file"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Описание</label>
                                            <textarea v-model="array[0]['content']" required="" type="text" class="form-control"   placeholder=""  v-model="form_item_value">
								Краткое описание рекламного носителя, для заинтересоваывания рекламодателя.
							</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label style="width: 100%" for="">Размер (высота x длина)</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input v-model="array[0]['height']" required="" type="text" class="form-control"  placeholder="Высота" value="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input v-model="array[0]['width']" required="" type="text" class="form-control"  placeholder="Длина" value=""/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Местоположение</label>
                                            <input v-model="array[0]['locate']" required="" type="text" class="form-control" name="locate_1" placeholder="По какому адрессу находитя рекламный носитель. Например Абая - Ауэзова или Абая 187" value=""/>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="width: 100%" for="">Цена</label>
                                                    <input v-model="array[0]['price']" required="" type="text" class="form-control" name="price_1" placeholder="" value=""/>
                                                </div>

                                                <div class="col-md-6">
                                                    <label  style="width: 100%" for="">Время освобождения</label>
                                                    <input v-model="array[0]['date']" type="date" class="form-control">
                                                    <!-- <input required="" type="text" class="form-control" name="freetime_1" placeholder="" value=""> -->
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Укажите на карте местонахождение рекламного носителя</label>
                                                <br/>
                                                (Тут карта)
                                            </div>
                                        </div>
                                    </div>








                                    <div class="form__item" :id="item"  v-for="item in form_item_array" >
                                        <h2>Точка @{{count = item + 1}}</h2>

                                        <div class="form-group">
                                            <label for="">Тип носителя</label>
                                            <select v-model="array[item]['type']" required  id="">
                                                <option value="Билбор">Билбор</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Сколько сторон у реккламного носителя?</label>
                                            <select v-model="array[item]['side']" required  id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Фото стороны А</label>
                                                    <input  class="form-control photo "  type="file"  >
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Фото стороны В</label>
                                                    <input  class="form-control photo"  type="file"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Описание</label>
                                            <textarea v-model="array[item]['content']" required="" type="text" class="form-control"   placeholder=""  v-model="form_item_value">
								Краткое описание рекламного носителя, для заинтересоваывания рекламодателя.
							</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label style="width: 100%" for="">Размер (высота x длина)</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input v-model="array[item]['height']" required="" type="text" class="form-control"  placeholder="Высота" value="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input v-model="array[item]['width']" required="" type="text" class="form-control"  placeholder="Длина" value=""/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Местоположение</label>
                                            <input v-model="array[item]['locate']" required="" type="text" class="form-control" name="locate_1" placeholder="По какому адрессу находитя рекламный носитель. Например Абая - Ауэзова или Абая 187" value=""/>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="width: 100%" for="">Цена</label>
                                                    <input v-model="array[item]['price']" required="" type="text" class="form-control" name="price_1" placeholder="" value=""/>
                                                </div>

                                                <div class="col-md-6">
                                                    <label  style="width: 100%" for="">Время освобождения</label>
                                                    <input v-model="array[item]['date']" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Укажите на карте местонахождение рекламного носителя</label>
                                                <br/>
                                                (Тут карта)
                                            </div>
                                        </div>
                                    </div>


















                                    <button type="button" @click="add_item" class="btn btn-success add_item">Дублировать точку</button>
                                    <button type="button" @click="save" class="btn btn-info add_item">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>

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


@stop
