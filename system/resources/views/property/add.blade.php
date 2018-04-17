<style>
    #map {
        height: 40%;
        width: 70%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
    }

    #infowindow-content .title {
        font-weight: bold;
    }

    #infowindow-content {
        display: none;
    }

    #map #infowindow-content {
        display: inline;
    }

    .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
    }

    #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
    }

    .pac-controls {
        display: inline-block;
        padding: 5px 11px;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        margin-top: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
    }
    #target {
        width: 345px;
    }
</style>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('property.save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">District</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="district">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Town</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="town">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Address</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Street</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="street">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">VDC</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="vdc">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Ward No</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="ward_no">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">House No</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="house_no">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Land Area</label>
                        <select name="land_area_id" class="form-control">
                            @foreach($lands as $land)
                                <option value="{{$land->id}}">{{$land->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Reference</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="reference">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Property Description</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="property_description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Property Type</label>
                        <select name="property_type" class="form-control">
                            @foreach($protypes as $protype)
                                <option value="{{$protype->id}}">{{$protype->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Apartment Builder</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="apartment_builder_id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Complition Stage</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="complition_stage">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Complition Date</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="complition_date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Complition Year</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="complition_year">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Seller Expected</label>
                        <select name="seller_expected_id" class="form-control">
                            @foreach($sellerexpecteds as $sellerexpected)
                                <option value="{{$sellerexpected->id}}">{{$sellerexpected->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Availibility</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="availibility">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Urgency</label>
                        <select name="urgency_id" class="form-control">
                            @foreach($urgencies as $urgency)
                                <option value="{{$urgency->id}}">{{$urgency->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Road Access</label>
                        <select name="road_access_id" class="form-control">
                            @foreach($roadaccess as $roadaccess)
                                <option value="{{$roadaccess->id}}">{{$roadaccess->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">map</label>
                        <div class="col-10">
                            <input id="pac-input" class="controls" type="text" name="map" placeholder="Search Box">
                            <div id="map"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Property Status</label>
                        <select name="property_status_id" class="form-control">
                            @foreach($propertystatuses as $propertystatus)
                                <option value="{{$propertystatus->id}}">{{$propertystatus->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Highlight</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="highlight">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Property Detail Info</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="property_detail_info">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Negotiability</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="negotiability">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Exterior</label>
                        <select name="exterior_id" class="form-control">
                            @foreach($exteriors as $exterior)
                                <option value="{{$exterior->id}}">{{$exterior->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Interior</label>
                        <select name="interior_id" class="form-control">
                            @foreach($interiors as $interior)
                                <option value="{{$interior->id}}">{{$interior->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Environment</label>
                        <select name="environment_id" class="form-control">
                            @foreach($environments as $environment)
                                <option value="{{$environment->id}}">{{$environment->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Rent</label>
                        <select name="rent_id" class="form-control">
                            @foreach($rents as $rent)
                                <option value="{{$rent->id}}">{{$rent->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Facility</label>
                        <select name="facility_id" class="form-control">
                            @foreach($facilities as $facility)
                                <option value="{{$facility->id}}">{{$facility->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Finiance</label>
                        <select name="finance_id" class="form-control">
                            @foreach($finances as $finance)
                                <option value="{{$finance->id}}">{{$finance->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Document</label>
                        <select name="legal_document_id" class="form-control">
                            @foreach($documents as $document)
                                <option value="{{$document->id}}">{{$document->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Elevation</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="elevation">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Advance</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="advance">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Broker Response</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="broker_response">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Owner</label>
                        <select name="owner_id" class="form-control">
                            @foreach($personals as $personal)
                                <option value="{{$personal->id}}">{{$personal->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Advertisment Objective</label>
                        <select name="ad_objective_id" class="form-control">
                            @foreach($adobjs as $adobj)
                                <option value="{{$adobj->id}}">{{$adobj->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Advertisment Type</label>
                        <select name="ad_type_id" class="form-control">
                            @foreach($adtypes as $adtype)
                                <option value="{{$adtype->id}}">{{$adtype->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Advertisment Transavtion</label>
                        <select name="ad_transaction_id" class="form-control">
                            @foreach($adtransactions as $adtransaction)
                                <option value="{{$adtransaction->id}}">{{$adtransaction->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Commission Type</label>
                        <select name="commission_id" class="form-control">
                            @foreach($commissions as $commission)
                                <option value="{{$commission->id}}">{{$commission->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="save">Add</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 27.736479, lng: 85.330421},
                zoom: 13,
                mapTypeId: 'roadmap'
            });

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7R6XWDuCnvNSqeAE8d0TqoMiLSCiSctQ&libraries=places&callback=initAutocomplete"
            async defer></script>
@endsection