@extends('layouts.mail')

@section('content')

<div style="text-align: center; padding: 50px 0 0;">

	<table style="width: 100%; margin-bottom: 50px;">

		<tr>
			<th style="background-color: #104f9e; color: #fff; font-weight: bold; text-align: right; padding: 5px 20px;">Nombre:</th>
			<td style="background-color: #ddd; color: #104f9e; font-weight: normal; text-align: left; padding: 5px 20px;">{{ $lead->name }}</td>
		</tr>

		<tr>
			<th style="background-color: #104f9e; color: #fff; font-weight: bold; text-align: right; padding: 5px 20px;">Email:</th>
			<td style="background-color: #ddd; color: #104f9e; font-weight: normal; text-align: left; padding: 5px 20px;">{{ $lead->email }}</td>
		</tr>

		<tr>
			<th style="background-color: #104f9e; color: #fff; font-weight: bold; text-align: right; padding: 5px 20px;">Mensaje:</th>
			<td style="background-color: #ddd; color: #104f9e; font-weight: normal; text-align: left; padding: 5px 20px;">{{ $lead->message }}</td>
		</tr>

	</table>

</div>

@endsection
