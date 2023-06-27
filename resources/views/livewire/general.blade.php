<main class="main-content">
    <div class="container-fluid py-2">
        <div class="row">

            {{-- Status --}}
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Status</h6>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#addStatusModal">Add New</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            @foreach ($statuses as $status)
                                <li class="list-group-item border-0 d-flex justify-content-between p-2 mb-2 bg-gray-100 border-radius-lg">{{ $status->status_name }} <span><i class="fa fa-solid fa-pencil"></i>  <i class="fa fa-solid fa-trash"></i></span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- CTS --}}
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Call & Text Status</h6>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#addCTSModal">Add New</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            @foreach ($calltextstatus as $cts)
                                <li class="list-group-item border-0 d-flex justify-content-between p-2 mb-2 bg-gray-100 border-radius-lg">{{ $cts->cts_name }}  <span><i class="fa fa-solid fa-pencil"></i>  <i class="fa fa-solid fa-trash"></i></span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Couriers --}}
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Couriers</h6>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#addCourierModal">Add New</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            @foreach ($couriers as $courier)
                                <li class="list-group-item border-0 d-flex justify-content-between p-2 mb-2 bg-gray-100 border-radius-lg">{{ $courier->courier_name }}  <span><i class="fa fa-solid fa-pencil"></i>  <i class="fa fa-solid fa-trash"></i></span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Import History --}}
            <div class="col-md-5 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Imports History</h6>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            <li
                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                                    <span class="text-xs">#CC-214589</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    {{-- $350 --}}
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> CSV</button>
                                </div>
                            </li>
                            <li
                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                                    <span class="text-xs">#FB-212562</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    {{-- $560 --}}
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> CSV</button>
                                </div>
                            </li>
                            <li
                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                                    <span class="text-xs">#QW-103578</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    {{-- $120 --}}
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> CSV</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                                    <span class="text-xs">#AR-803481</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    {{-- $300 --}}
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> CSV</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                              <div class="d-flex flex-column">
                                  <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                                  <span class="text-xs">#ST-451897</span>
                              </div>
                              <div class="d-flex align-items-center text-sm">
                                  {{-- $275 --}}
                                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                          class="fas fa-file-pdf text-lg me-1"></i> CSV</button>
                              </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  
            <!-- Add Modal -->
            <div wire:ignore.self class="modal fade" id="addStatusModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add New Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="statusStore">
                            <div class="form-group">
                                <label for="status_name" class="form-control-label">Status Name</label>
                                <input class="form-control" type="text" id="status_name" wire:model="status_name" placeholder="Type status here">
                                @error('status_name')
                                    <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                @enderror
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn bg-secondary text-white" data-bs-dismiss="modal" wire:click="closeModal()">Close</button>
                                <button type="submit" class="btn bg-primary text-white">Save</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>

            <div wire:ignore.self class="modal fade" id="addCTSModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Call & Text Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="ctsStore">
                            <div class="form-group">
                                <label for="cts_name" class="form-control-label">Call & Text Status Name</label>
                                <input class="form-control" type="text" id="cts_name" wire:model="cts_name" placeholder="Type status here">
                                @error('cts_name')
                                    <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                @enderror
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn bg-secondary text-white" data-bs-dismiss="modal" wire:click="closeModal()">Close</button>
                                <button type="submit" class="btn bg-primary text-white">Save</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>

            <div wire:ignore.self class="modal fade" id="addCourierModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Call & Text Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="courierStore">
                            <div class="form-group">
                                <label for="courier_name" class="form-control-label">Call & Text Status Name</label>
                                <input class="form-control" type="text" id="courier_name" wire:model="courier_name" placeholder="Type status here">
                                @error('courier_name')
                                    <span class="text-danger" style="font-size: 11.5px">{{ $message }}</span>
                                @enderror
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn bg-secondary text-white" data-bs-dismiss="modal" wire:click="closeModal()">Close</button>
                                <button type="submit" class="btn bg-primary text-white">Save</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
    </div>

    <script>
        window.addEventListener('close-add-modal', event => {
            $('#addStatusModal').modal('hide');
            $('#addCTSModal').modal('hide');
            $('#addCourierModal').modal('hide');
        });

        window.addEventListener('close-edit-modal', event => {
            $('#editModal').modal('hide');
        });

        window.addEventListener('close-delete-modal', event => {
            $('#deleteModal').modal('hide');
        });
    </script>
</main>
