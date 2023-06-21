<main class="main-content">
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Statuses</h6>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary btn-sm mb-0">Add New</button>
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
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Call & Text Status</h6>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary btn-sm mb-0">Add New</button>
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
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Couriers</h6>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary btn-sm mb-0">Add New</button>
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
    </div>
</main>
