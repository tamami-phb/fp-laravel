<h1>isi data</h1>

@foreach($isiData as $detail)
  <p>{{ $detail->nim }} | {{ $detail->nama }} | {{ $detail->kelas }}
@endforeach