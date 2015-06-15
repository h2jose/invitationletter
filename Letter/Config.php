<?php namespace App;

class Config {

    public static function init(array $data = array())
    {


        // Main manual footer items, Edit:
        $president = 'Name of Event President or Director';
        $position = 'Title of Event President or Director';
        $institution_president = 'Name of President Institution';
        $city = 'City of Event';

        // Text of letter (HTML Format), Edit:
        $body = '

        <p style="text-align: justify;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        <p style="text-align: justify;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        ';

        // Items from Post Form, Not Edit:œ
        $title = $data['title'];
        $applicant = $data['applicant'];
        $institution = $data['institution'];

        // Items to identify Letter, Not Edit :
        $date_applicant = date('Y-m-d');
        $filename = $applicant . '-' . $date_applicant ;

        // Capture Form items




        $data = array(
            'date_applicant' => $date_applicant,
            'city' => $city,
            'title' => $title,
            'applicant' => $applicant,
            'institution' => $institution,
            'president' => $president,
            'position' => $position,
            'institution_president' => $institution_president,
            'body' => $body,
            'filename' => $filename
        );

        return $data;

    }

}