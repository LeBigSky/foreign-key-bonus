<section class="mt-5">

    <div class="container d-flex flex-column">
        <form action="/home" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name='color'>
                <label class="form-label" for="form1Example1">couleur</label>
            </div>
            <div class="form-outline mb-4">
                <input type="file" name="src" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Image</label>
            </div>
            <div>
                <input type="text" name="nom" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Nom</label>
            </div>
            <div class="form-outline mb-4">
                <input type="number" name="age" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Age</label>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
        </form>
    </div>
</section>
