<?php print '<?xml version="1.0" encoding="UTF-8" ?>'; ?>

<properties>
    @foreach ($properties as $property)
    <property>

        <property-id>
            {{ $property->id }}
        </property-id>
        <date-listed>
            {{$property->date_listed}}
        </date-listed>
        <property-type>
            {{ $property->description }}
        </property-type>
        <listing-type>
            {{ $property->listing_type }}
        </listing-type>
        <location>
            @foreach ($property->locations  as $location)
                <postal-code>
                    {{ $location->location_postal_code }}
                </postal-code>
                <city>
                    {{ $location->location_city }}
                </city>
                <city-area>
                    {{ $location->location_city_area }}
                </city-area>
                <address>
                    {{ $location->location_address }}
                </address>
                <geox>
                    {{ $location->geox }}
                </geox>
                <geoy>
                    {{ $location->geoy }}
                </geoy>
            @endforeach
        </location>
        <contact>
            @foreach ($property->contacts as $contact)
                <title>
                    {{ $contact->contact_title }}
                </title>
                <business-title>
                    {{ $contact->business_title }}
                </business-title>
                <name>
                    {{ $contact->contact_name }}
                </name>
                <surname>
                    {{ $contact->contact_surname }}
                </surname>
                <address>
                    {{ $contact->contact_address }}
                </address>
                <addressno>
                    {{ $contact->contact_addressno }}
                </addressno>
                <zipcode>
                    {{ $contact->contact_zipcode }}
                </zipcode>
                <city>
                    {{ $contact->contact_city }}
                </city>
                <phone>
                    {{ $contact->contact_phone }}
                </phone>
                <mobile>
                    {{ $contact->contact_mobile }}
                </mobile>
                <fax>
                    {{ $contact->contact_fax }}
                </fax>
                <email>
                    {{ $contact->contact_email }}
                </email>
            @endforeach
        </contact>
        <property-size>
            <number>
            {{ $property->property_size }}
            </number>
        </property-size>
        <land-size>
            <number>
            {{ $property->land_size }}
            </number>
        </land-size>
        <price>
            <amount>
            {{ $property->price }}
            </amount>
        </price>
        <images>
            @foreach ($property->images as $image)
                <image>
                    {{ $image->image }}
                </image>
            @endforeach
        </images>
        <videos>
            @foreach ($property->videos as $video)
                <video>
                    {{ $video->video }}
                </video>
            @endforeach
        </videos>
        <features>
            @foreach ($property->features as $feature)
                <bedrooms>
                    {{ $feature->bedrooms }}
                </bedrooms>
                <bathrooms>
                    {{ $feature->bathrooms }}
                </bathrooms>
                <rooms>
                    {{ $feature->rooms }}
                </rooms>
                <condition>
                    {{ $feature->condition }}
                </condition>
                <age>
                    {{ $feature->age }}
                </age>
                <floor>
                    {{ $feature->floor }}
                </floor>
            @endforeach
        </features>
        <tags>
            @foreach ($property->tags as $tag)
                <tag>
                    {{ $tag->tag }}
                </tag>
            @endforeach
        </tags>
        <title>
            {{ $property->title }}
        </title>
        <description>
            {{ $property->description }}
        </description>
        <title-EN>
            {{ $property->title_en }}
        </title-EN>
        <description-EN>
            {{ $property->description_en }}
        </description-EN>
        <title-DE>
            {{ $property->title_de }}
        </title-DE>
        <description-DE>
            {{ $property->description_de }}
        </description-DE>
        
    </property>
    @endforeach
</properties>
