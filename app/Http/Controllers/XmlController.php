<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use SimpleXMLElement;

class XmlController extends Controller
{
    // Show Upload Form
    public function showForm()
    {
        return view('contacts.upload');
    }

    // Process XML File Upload
    public function uploadXml(Request $request)
    {
        if (!$request->hasFile('xml_file')) {
            return back()->with('error', 'No file uploaded.');
        }
        
        
        // Store uploaded file
        $file = $request->file('xml_file');
        $path = $file->storeAs('uploads', $file->getClientOriginalName());
        

        // Read XML File
        $xmlContent = Storage::get($path);

        $xml = new SimpleXMLElement($xmlContent);
        // Parse and Save to Database
        foreach ($xml->contact as $item) {
            Contact::create([
                'name' => (string) $item->name,
                'phone' => (string) $item->phone,
                'enable'=> 1,
            ]);
        }

        return redirect()->route('contacts.index')->with('success', 'XML data imported successfully.');
    }
}
