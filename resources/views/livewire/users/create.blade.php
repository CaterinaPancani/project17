<div>

<h2>Crea Utente</h2>
<form wire:submit.prevent="store">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Name</label>
      <input type="text" class="form-control" wire:model="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" wire:model="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" wire:model="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
