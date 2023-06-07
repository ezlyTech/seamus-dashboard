<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
          <h6>Sales table</h6>
          <button class="btn btn-icon btn-3 btn-info" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
            <span class="btn-inner--icon pe-1"><i class="fa fa-plus"></i></span>
            <span class="btn-inner--text">Add new</span>
          </button>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <x-orders.table.table-head />
                <x-orders.table.table-body />
                @foreach ($sales as $key => $sale)
                    <x-orders.table.table-body :dataSales="$sale" :wire:key="$key" />
                @endforeach
                {{-- @empty
                    <x-orders.table.table-empty/>
                @endempty --}}
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<x-orders.crud.add-modal />


{{-- <script type="text/javascript">
  document.addEventListener('livewire:available', function () {
    window.livewire.on('orderStore', () => {
      $('#addModal').modal('hide');
    });
  }.bind(this));
</script> --}}