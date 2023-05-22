{{-- <div id="table" class="flex flex-col">
    <div class="-my-2 overflow-x-auto">
        <div class="py-2 align-middle inline-block min-w-full">
            <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-500 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-500">
                    <x-campaigns.table.table-head :titles="$applicantFields" :fields="$fieldNames"/>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-700 dark:divide-gray-500">
                        @forelse ($applicants as $key => $applicant)
                            <x-campaigns.table.table-body :applicant="$applicant" :key="$key" />
                        @empty
                            <x-campaigns.table.table-empty/>
                        @endforelse

                    </tbody>
                </table>
                <x-table-pagination :pagination="$pagination" :customItemPerPage="true" :itemPerPageFieldName="'CampaignPage'" />
            </div>
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Sales table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <x-orders.table.table-head />
                <x-orders.table.table-body />
                @forelse ($sales as $key => $sale)
                    <x-orders.table.table-body :dataSales="$sale" :key="$key" />
                @empty
                    <x-orders.table.table-empty/>
                @endforelse
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>