@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create n New Pizza</h1>

    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">your name :</label>
        <input type="text" id="name" name="name">
        <label for="type">choose pizza type:</label>
        <select name="type" id="type">
            <option value="margerita">Margerita</option>
            <option value="hawwaian">Hawaian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volvano">volcano</option>
        
        </select>

        <label for="type">choose base` type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="thick">thick</option>
        
        </select>

        <fieldset>
            <label for="">Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza" name="" id="">
    </form>


</div>
@endsection