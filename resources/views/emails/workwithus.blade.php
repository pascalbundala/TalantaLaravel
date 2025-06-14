<h3>New Contact Message</h3>
<p><strong>Name:</strong> {{ $data['names'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
<p><strong>Company:</strong> {{ $data['company'] }}</p>
<p><strong>Project:</strong> {{ $data['project'] }}</p>
<p><strong>Additional:</strong> {{ $data['additional'] }}</p>

@if(!empty($data['services']))
<p><strong>Interested in:</strong></p>
<ul>
    @foreach($data['services'] as $service)
        <li>{{ $service }}</li>
    @endforeach
</ul>
@endif
