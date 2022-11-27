<section>
    <a href="/home/create">Creer membre</a>
<div class="container">
      <table class="table my-5">
        <h2 class="my-3">Members</h2>
        <thead>
          <tr>
            <th scope="col">nom</th>
            <th scope="col">age</th>
            <th scope="col">Avatar</th>
            <th scope="col">Color</th>
            {{-- <th scope="col">ID</th> --}}
          </tr>
        </thead>
        <tbody>
      @foreach ($members as $member )
      <tr class="align-middle">
        <td>{{ $member->nom}}</td>
        <td>{{ $member->age }}</td>
        <td><img src="{{ asset('storage/'.$member->avatar->src) }}" width="75px" alt=""></td>
        <td>{{ $member->avatar->color->color }}</td>
        </tr>
      @endforeach
        </tbody>
      </table>
</div>
  
</section>