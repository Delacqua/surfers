 @extends('main')
 
 @section('content')

<div class="container">
    <h1>All boards</h1>
    <table class="table table-striped table-bordered table-hover">
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->name}}</td>
                <td> <img src= '/img/products/{{$p->img}}.png' alt='Board Preview' height=42 width=42 > </td>
                <td>{{$p->price}} </td>
                <td>{{$p->description}} </td>
                <td>{{$p->features}} </td>
                <td>{{$p->dimensions}} </td>
                <td>
                    <a href="/buy/{{$p->id}}" >
                        <h2>buy</h2>                        
                    </a>
                </td>

            </tr>
        @endforeach
    </table>
</div>
@stop