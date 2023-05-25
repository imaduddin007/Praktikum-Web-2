@php
    $nama = 'Imad';
    $nilai = 100;
@endphp {{-- struktur kendali if --}} 

@if ($nilai >= 60)
    @php 
        $ket = "Lulus";     
    @endphp
@else
    @php 
        $ket = "Gagal"; 
    @endphp
@endif

Mahawsiswa {{ $nama }} dengan nilai {{ $nilai }}  dinyatakan {{ $ket }} 
