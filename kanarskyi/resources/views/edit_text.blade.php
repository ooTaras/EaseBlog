@extends('temp')

@section('title')Edit_Text @endsection
@section ('edit_style') 
<style>
			#w{
				width: 68.8vw;
				height: 15vh;
				background-color: yellow;
				margin: 10px 0 20px 0 ;
				border-radius: 10px;
			}
			#w{
				width: 68.8vw;
				height: 15vh;
				background-color: yellow;
				margin: 10px 0 20px 0 ;
				border-radius: 10px;
				display: flex;
				flex-direction: column;
				padding: 0 0 0 40px;
			}
			.box{
				display: flex;
				width: 65vw;
				height: 40vh;
				justify-content: center;
				padding: 10px;
			}
			.box_add{
				padding: 10px;
				background-color:#968E8E;
				display: flex;
				flex-direction: column;
				width: 25vw;
			}
			.box_del{
				background-color: blue;
				display: flex;
			}
			.edit_form{
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				height: 30vh;
			}
			textarea{
				height: 10vh;
			}
			button{
				width: 10vw;
				height: 4vh;
				border-radius: 5px;
				background-color: #77F55A
			}

</style>
@stop			
@section('main_page')
	   <div id="w"></div>
	   
	@stop
	@section('main_content')
		 	<div class="box">
			 	<div class="box_add">
			 		<div class="add">
			 			<h2>Оновлення статті</h2>
			 		</div>
			 		<form action="{{route('update_text', $reviews->id)}}" method="POST" class="edit_form" >
                        @csrf
                       	<input type="text" name="title" placeholder="Введіть загаловок" id="input"  value="{{$reviews->title}}">
                        <input type="text" name="sub_title" placeholder="Введіть загаловок короткий опис" id="inp"  value="{{$reviews->sub_title}}">
                        <textarea placeholder="Текст статті" name="text" >{{$reviews->text}}</textarea>
                        <button type="submit" class="submit" >Оновити</button>       
                    </form>
			 	</div>	
			 </div> 
		 	
		@stop

