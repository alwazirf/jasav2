<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@page {
    margin-top: 20px;
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0;
  margin-left: 20px;
  /* box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); */
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  /* background-color: salmon; */

  }
}

/* Style the counter cards */
.text-tengah {
  text-align: left;
  position: absolute;
  left: 23%;
  top: 30%;
  width: 200px;
  /* border: 5px solid black; */
  font-size:10px;
  font-weight:bold;
}


.photo{
    z-index: 100 !important;
    position : relative;
    top: 29%;
    left: 3%;
}

.barcode {
  z-index: 101 !important;
  float: right;
  position: fixed;
  top: 11.5%;
  margin-right: 1%;
}
.card {
      /* width: 80%; */
      width: 323px;
      height: 204px;
      border-radius: 6px;
      /* position: relative; */
      /* position: absolute; */
      z-index: -1;
}

#bg{
    width: 323px;
    height: 204px;
    position: absolute;
    border-radius: 5px;
    border: 0.5px solid rgb(180, 180, 180);
    z-index: -999999;
}

.has-bg-img{
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.text-bawah{
  position: relative;
  left: 3%;
  top: 32%;
  z-index: 1000 !important;
  width: 110px;
  height: 30px;
  font-size: 7px;
  font-weight: bold;
}

.text-belakang{
  position: relative;
  top: -0.5%;
  z-index: 1000 !important;
  width: 80px;
  height: 30px;
  font-size: 5px;
}

.label-jenis{
  z-index: 1000 !important;
  float: right;
  position: fixed;
  top: 6%;
  margin-right: 1%;
  width:30px;
  height: 30px;
  border: 0.5px solid black;
  text-align: center;
}

.page_break { page-break-before: auto; }

</style>
</head>
<body>
    <div class="">
        @php $check=0; @endphp
    @if($check==0)
     @php echo '<div class="row"></div>'; @endphp
    @endif
    @foreach($members as $member)
    @php $check++; @endphp
    <div class="column card" style="margin-bottom: 10px;" id="bg">
        <img src="{{ url('assets/img/depan.png')}}" alt="" id="bg">
          <div class="text-tengah">
              <p style="text-transform: uppercase;">{{ $member->name }} BIN {{ $member->father_name }}</p>
              <p style="margin-top:-10px; text-transform: uppercase;">SANDI AYAH : {{ $member->father_enc }}</p>
              <p style="margin-top:-10px;letter-spacing:5px">{{ $member->member_no }}</p>
          </div>
          @if($member->image)
          <img class="photo" src="{{ asset('storage/'. $member->image) }}" alt="" style="width:60px; height:70px">
          @else
          <img class="photo" src="{{ url('assets/img/no-image.png')}}" alt="" style="width:60px; height:70px">
          @endif
          <div class="label-jenis">
            <span class="label" style="font-size:25px; font-weight:bold; padding-top:10px">{{ $member->father_date_of_death <= "2005-08-31" ? 'A' : 'B' }}</span>
          </div>
          <img class="barcode" src="{{ url('assets/img/jasaqr.png')}}" alt="" style="width:55px; height:55px; border: 1px solid black">
          <div class="text-bawah">{{ $member->address }}, Kec. {{ $member->district->name }}, Kab. {{ $member->district->city->name }} - ACEH 24371</div>
        {{-- </div> --}}
    </div>
    @if( $check % 2 == 0 )
     @php echo '<div class="row"></div>'; @endphp
    @endif
    @endforeach
  </div>

</body>
</html>
