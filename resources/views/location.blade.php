<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dynamic Dropdown Insert</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h2>Laravel Dynamic Dependent Dropdown - Insert Selected Data</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('saveLocation') }}">
    @csrf

    <select id="country" name="country_id" required>
        <option value="">-- Select Country --</option>
        @foreach($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
        @endforeach
    </select>

    <select id="state" name="state_id" required>
        <option value="">-- Select State --</option>
    </select>

    <select id="city" name="city_id" required>
        <option value="">-- Select City --</option>
    </select>

    <button type="submit">Save</button>
</form>

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('#country').change(function(){
        var countryID = $(this).val();
        if(countryID){
            $.post("{{ route('getStates') }}", {country_id:countryID}, function(states){
                $('#state').empty().append('<option value="">-- Select State --</option>');
                $('#city').empty().append('<option value="">-- Select City --</option>');
                $.each(states, function(key, value){
                    $('#state').append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            });
        } else {
            $('#state').empty().append('<option value="">-- Select State --</option>');
            $('#city').empty().append('<option value="">-- Select City --</option>');
        }
    });

    $('#state').change(function(){
        var stateID = $(this).val();
        if(stateID){
            $.post("{{ route('getCities') }}", {state_id:stateID}, function(cities){
                $('#city').empty().append('<option value="">-- Select City --</option>');
                $.each(cities, function(key, value){
                    $('#city').append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            });
        } else {
            $('#city').empty().append('<option value="">-- Select City --</option>');
        }
    });
</script>

</body>
</html>
