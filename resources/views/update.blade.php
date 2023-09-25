<div style="font-size:25px">


<form action="{{route('emp.update',$upEmp->id)}}" method="POST">

    @method('PUT')
    @csrf
    <label>Name: </label><br>
    <input type="text" name="name" placeholder="Enter Name" value="{{$upEmp->name}}"><br><br>
    <label>Title: </label><br>
    <input type="text" name="title" placeholder="Enter Tiltle" value="{{$upEmp->title}}"><br><br>
    <label>job title: </label><br>
    <input type="text" name="job" placeholder="Enter Job" value="{{$upEmp->job}}"><br><br>
    <label>Age: </label><br>
    <input type="number" name="age" placeholder="Enter Age" max="99" min="18" style="width:12%"value="{{$upEmp->age}}"><br><br>
    <label>Phone: </label><br>
    <input type="number" name="phone" placeholder="Enter Number Phone" style="width:12%"value="{{$upEmp->phone}}"><br><br>
    <button style="color:green ;border:1px solid white ;padding:5px">DONE</button>


    </form>
    <div>
