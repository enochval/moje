<?php

use Illuminate\Database\Seeder;
use App\Modules\Admission\Models\AdmissionWorkflowPosition;

class AdmissionWorkflowPositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workflow = [
            [
               'position' => 'applicant_profile',
               'description' => 'Applicant Registration Profile Information',
               'applicant_description' => '',
               'action_back' => '',
               'action_next' => 'Next',
               'action_cancel' => '',
            ],
            [
               'position' => 'applicant_department_selection',
               'description' => 'Applicant Choice of Department',
               'applicant_description' => '',
               'action_back' => '',
               'action_next' => 'Next',
               'action_cancel' => '',
            ],
            [
               'position' => 'applicant_upload_document',
               'description' => 'Applicant Upload Documents',
               'applicant_description' => '',
               'action_back' => 'Previous',
               'action_next' => 'Next',
               'action_cancel' => '',
            ],
            [
               'position' => 'applicant_view_profile',
               'description' => 'Applicant Review Profile',
               'applicant_description' => '',
               'action_back' => 'Previous',
               'action_next' => 'Next',
               'action_cancel' => '',
            ],
            [
               'position' => 'applicant_payment',
               'description' => 'Applicant Make Payment',
               'applicant_description' => '',
               'action_back' => '',
               'action_next' => 'Next',
               'action_cancel' => '',
            ],
            [
               'position' => 'applicant_submit',
               'description' => 'Applicant Submit Application',
               'applicant_description' => '',
               'action_back' => '',
               'action_next' => 'Next',
               'action_cancel' => '',
            ],
            [
               'position' => 'admin_officer_review',
               'description' => 'Admin Officer Review',
               'applicant_description' => '',
               'action_back' => 'Review',
               'action_next' => 'Approve',
               'action_cancel' => 'Disapprove',
            ],
            [
               'position' => 'registrar_approval',
               'description' => 'Registrar Approval',
               'applicant_description' => '',
               'action_back' => 'Review',
               'action_next' => 'Approve',
               'action_cancel' => 'Disapprove',
            ],
            [
               'position' => 'administration_review',
               'description' => 'Administration Review',
               'applicant_description' => '',
               'action_back' => '',
               'action_next' => 'Approve',
               'action_cancel' => '',
            ],
        ];

        foreach ($workflow as $key => $value)
        {
            AdmissionWorkflowPosition::create($value);
        }
    }
}
