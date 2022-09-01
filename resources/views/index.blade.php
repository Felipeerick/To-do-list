<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ToDoList</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
          <div class="card-body py-4 px-4 px-md-5">

            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
              <i class="fas fa-check-square me-1"></i>
              <u>My Todo-s</u>
            </p>

            <div class="pb-2">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST" class="d-flex">
                        @csrf   
                        <input type="text" class="form-control form-control-lg"
                        placeholder="Add new..." name="name">
                        <div class="d-flex flex-row justify-content-end">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>

            <hr class="my-4">
            @forelse($lists as $list)
                <div class="d-flex justify-content-center align-content-center">
                    <input class="" type="checkbox" value="" id="flexCheckChecked3" aria-label="..." />
                    <input type="text" value='{{$list->name}}' readonly id="name" class="form-control mt-1">
                <form action="{{ route('destroy', $list->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger my-2" title="Delete" type="submit">Deletar</button>
                </form>
                </div>
                @empty
                <div class="text-center text-muted">
                    Sem tarefas :}
                </div>
            @endforelse
        </div>
      </div>
    </div>
  </div>
</section>

<style>
#list1 .form-control {
  border-color: transparent;
}
#list1 .form-control:focus {
  border-color: transparent;
  box-shadow: none;
}
#list1 .select-input.form-control[readonly]:not([disabled]) {
  background-color: #fbfbfb;
}
</style>
    </body>
</html>