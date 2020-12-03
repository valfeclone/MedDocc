<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('/css/invoice-style.css') }}" rel="stylesheet">

    <title>MEDDOC</title>
</head>
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Daftar Invoice</h1>

    <div class="tab">
        <a href="/doctor/invoice" class="tab-link active">Semua Invoice</a>
        <a href="/doctor/invoice/untaken" class="tab-link">Invoice Menunggu Diambil</a>
        <a href="/doctor/invoice/taken" class="tab-link">Invoice Dalam Progress</a>
        <a href="/doctor/invoice/done" class="tab-link">Invoice Selesai</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Nama User</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">ID Keluhan</th>
                <th scope="col">Jam Pelaporan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice as $invoice)
            <tr>
                <td>
                    @if ($invoice->status == 'done')
                        Sudah Selesai
                    @elseif ($invoice->status == 'accepted')
                        Sudah Diambil Dokter
                    @else
                        Belum Diambil Dokter
                    @endif
                </td>
                <td>{{$invoice->user_id}}</td>
                <td>{{$invoice->doctor_id}}</td>
                <td>{{$invoice->report_id}}</td>
                <td>{{$invoice->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- dibawah ini alert buat response hasil. kalo susah ngeditnya dicomment aja. dites dulu hasilnya apa kalo pencet button ubah status izin dokter -->
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    @if (\Session::has('error'))
    <div class="alert alert-error">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
</div>