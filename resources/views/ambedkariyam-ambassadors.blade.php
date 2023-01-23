@extends('layouts.web')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="padding-top:70px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner3">
      </div>
    </div>
  </div>
<marquee style="font-size:25px; color:red;" attribute_name = "attribute_value"....more attributes>
திருச்சி நிகழ்வில் பதிவு செய்தவர்களின் பெயர்கள் பதிவேற்றும் பணி நடந்து கொண்டிருக்கிறது. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; அடுத்த நிகழ்வுகள் - அம்பேத்கரியம் 50 முன்வெளியீட்டுப் பதிவு மற்றும் ஜெய்பீம் 2.0 நிகழ்வுகள் நடைபெற உள்ள பகுதிகள் கும்பகோணம், சேலம், அரியலூர், கள்ளக்குறிச்சி.
</marquee>
<section id="what-we-do" class="what-we-do">
<div class="container">
<div class="card">
    <div class="card-header">
    அம்பேத்கரிய தூதுவர் பட்டியல்
    </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class=" table table-bordered table-responsive table-striped table-hover datatable datatable-Member">
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Plan
                                    </th>
                                    <th>
                                        District
                                    </th>
                                    <th>
                                        BLock
                                    </th>
                                    <th>
                                        Village
                                    <th>
                                        Habitation
                                    </th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach($members as $key => $member)
                                    <tr data-entry-id="{{ $member->id }}">
                                        <td>
                                            {{ $member->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $member->plan_id ?? '' }}
                                        </td>
                                        <td>
                                            {{  $member->member_libraries->district_id ?? '' }}
                                        </td>
                                        <td>
                                        {{  $member->member_libraries->block_id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $member->member_libraries->village_id ?? '' }}
                                        <td>
                                            {{ $member->member_libraries->habitation_id ?? '' }}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
        </div>
    </div>
</div>
</div>
</section>

@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('member_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.members.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.members.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'category', name: 'category' },
{ data: 'type', name: 'type' },
{ data: 'name', name: 'name' },
{ data: 'district_name', name: 'district.name' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Member').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
});

</script>
@endsection