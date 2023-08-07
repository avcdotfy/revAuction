<?php

namespace App\Helpers;

use App\Models\Document;

class UploadHelper
{
    public static  function uploadFile($req, $vId)
    {
        // dd($req->hasFile('docs'));
        if ($req->hasFile('docs')) {
            foreach ($req->file('docs') as $key => $doc) {
                $fileName = time() . '-' . $doc->getClientOriginalName();
                $doc->storeAs('document', $fileName, 'public');

                Document::create([
                    'type' => 'Document',
                    'path' => $fileName,
                    'vendor_id' => $vId
                ]);
            }
        }
    }

    public static function listDocs($vId)
    {
        $docs = Document::where('vendor_id', $vId)->get();
        return $docs;
    }
}
