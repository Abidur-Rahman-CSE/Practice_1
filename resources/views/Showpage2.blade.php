<div class="table-responsive">
    <table class="table table-striped table-hover table-condensed">
      <thead>
        <tr>
          <th><strong>Id</strong></th>
          <th><strong>Name</strong></th>
          <th><strong>Phone</strong></th>
          <th><strong>email</strong></th>
          <th><strong>Marital Status</strong></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($members as $k=>$member)
          <tr>
            <th>{{$k++}}</th>
            <th>{{$member->name}}</th>
            <th>{{$member->email}}</th>
            <th>{{$member->phn}}</th>    
            <th>{{$member->status}}</th>  
            <th>
                <a href={{'delete/'.$member->id}}>Delete</a>
                <a href={{'edit/'.$member->id}}>Edit</a>
            </th>
          </tr>
          @endforeach
        
      </tbody>
    </table>
    <a href="/">Dashboard</a>
  </div>