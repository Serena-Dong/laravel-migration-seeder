<div class="container">
  <div class="row justify-content-center d-flex m-3">

    <!-- CARD -->
    @foreach ($trains as $train )
    <div class="card m-5 text-secondary" style="width: 20em;">
     <div class="card-body">
      <h5 class="card-title mb-3">{{ $train['company'] }}</h5>
      <p class="card-text"><b>From: </b>{{ $train['departure_station']}} {{ $train['departure_time']}}</p>
      <p class="card-text"><b>To: </b>{{ $train['arrival_station']}} {{ $train['arrival_time']}}</p>
      <p class="card-text"><b>Train Code: </b>{{ $train['train_code']}}</p>
      <p class="card-text"><b>Carriage N: </b>{{ $train['carriage_number']}}</p>
      
      <!-- STATUS -->
      @if ($train->is_late)
      <p class="text-danger">Is Late</p>
      @else
      <p class="text-success">On Time</p>
      @endif

      <!-- STATUS -->
      @if ($train->is_canceled)
      <p class="text-danger">CANCELLED</p>    
      @endif

      <a href="#" class="btn btn-primary">Buy a Ticket</a>
      </div>
    </div>
    @endforeach

  </div>
</div>