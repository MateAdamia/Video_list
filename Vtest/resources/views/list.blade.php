<h1>Youtube videos List</h1>

<table border="1">
    <tr >
        <td>Publisher</td>
        <td>Title</td>
        <td>Link</td>
        <td>Duration_min</td>
        <td>Views</td>
    
    
    
    
    </tr>
   @foreach ($videos as $video)
   <tr>
        <td>{{$video['Publisher']}}</td>
        <td>{{$video['Title']}}</td>
        <td>{{$video['Link']}}</td>
        <td>{{$video['Duration_min']}}</td>
        <td>{{$video['Views']}}</td>




    </tr>

       
   @endforeach



</table>