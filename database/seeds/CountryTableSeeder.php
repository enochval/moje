<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countrys')->truncate();
        DB::table('countrys')->insert([
            ['id'=>'1', 'country'=>'Afghanistan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'2', 'country'=>'Albania','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'3', 'country'=>'Algeria','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'4', 'country'=>'American Samoa','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'5', 'country'=>'Andorra','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'6', 'country'=>'Angola','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'7', 'country'=>'Anguilla','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'8', 'country'=>'Antarctica','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'9', 'country'=>'Antigua and Barbuda','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'10', 'country'=>'Argentina','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'11', 'country'=>'Armenia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'12', 'country'=>'Aruba','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'13', 'country'=>'Australia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'14', 'country'=>'Austria','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'15', 'country'=>'Azerbaijan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'16', 'country'=>'Bahamas','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'17', 'country'=>'Bahrain','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'18', 'country'=>'Bangladesh','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'19', 'country'=>'Barbados','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'20', 'country'=>'Belarus','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'21', 'country'=>'Belgium','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'22', 'country'=>'Belize','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'23', 'country'=>'Benin','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'24', 'country'=>'Bermuda','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'25', 'country'=>'Bhutan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'26', 'country'=>'Bolivia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'27', 'country'=>'Bosnia and Herzegovina','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'28', 'country'=>'Botswana','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'29', 'country'=>'Bouvet Island','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'30', 'country'=>'Brazil','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'31', 'country'=>'British Indian Ocean Territory','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'32', 'country'=>'Brunei Darussalam','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'33', 'country'=>'Bulgaria','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'34', 'country'=>'Burkina Faso','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'35', 'country'=>'Burundi','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'36', 'country'=>'Cambodia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'37', 'country'=>'Cameroon','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'38', 'country'=>'Canada','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'39', 'country'=>'Cape Verde','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'40', 'country'=>'Cayman Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'41', 'country'=>'Central African Republic','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'42', 'country'=>'Chad','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'43', 'country'=>'Chile','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'44', 'country'=>'China','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'45', 'country'=>'Christmas Island','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'46', 'country'=>'Cocos (Keeling) Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'47', 'country'=>'Colombia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'48', 'country'=>'Comoros','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'49', 'country'=>'Congo','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'50', 'country'=>'Cook Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'51', 'country'=>'Costa Rica','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'52', 'country'=>'Croatia (Hrvatska)','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'53', 'country'=>'Cuba','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'54', 'country'=>'Cyprus','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'55', 'country'=>'Czech Republic','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'56', 'country'=>'Denmark','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'57', 'country'=>'Djibouti','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'58', 'country'=>'Dominica','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'59', 'country'=>'Dominican Republic','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'60', 'country'=>'East Timor','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'61', 'country'=>'Ecuador','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'62', 'country'=>'Egypt','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'63', 'country'=>'El Salvador','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'64', 'country'=>'Equatorial Guinea','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'65', 'country'=>'Eritrea','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'66', 'country'=>'Estonia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'67', 'country'=>'Ethiopia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'68', 'country'=>'Falkland Islands (Malvinas)','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'69', 'country'=>'Faroe Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'70', 'country'=>'Fiji','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'71', 'country'=>'Finland','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'72', 'country'=>'France','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'73', 'country'=>'France, Metropolitan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'74', 'country'=>'French Guiana','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'75', 'country'=>'French Polynesia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'76', 'country'=>'French Southern Territories','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'77', 'country'=>'Gabon','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'78', 'country'=>'Gambia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'79', 'country'=>'Georgia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'80', 'country'=>'Germany','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'81', 'country'=>'Ghana','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'82', 'country'=>'Gibraltar','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'83', 'country'=>'Guernsey','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'84', 'country'=>'Greece','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'85', 'country'=>'Greenland','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'86', 'country'=>'Grenada','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'87', 'country'=>'Guadeloupe','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'88', 'country'=>'Guam','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'89', 'country'=>'Guatemala','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'90', 'country'=>'Guinea','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'91', 'country'=>'Guinea-Bissau','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'92', 'country'=>'Guyana','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'93', 'country'=>'Haiti','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'94', 'country'=>'Heard and Mc Donald Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'95', 'country'=>'Honduras','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'96', 'country'=>'Hong Kong','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'97', 'country'=>'Hungary','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'98', 'country'=>'Iceland','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'99', 'country'=>'India','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'100', 'country'=>'Isle of Man','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'101', 'country'=>'Indonesia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'102', 'country'=>'Iran (Islamic Republic of)','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'103', 'country'=>'Iraq','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'104', 'country'=>'Ireland','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'105', 'country'=>'Israel','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'106', 'country'=>'Italy','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'107', 'country'=>'Ivory Coast','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'108', 'country'=>'Jersey','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'109', 'country'=>'Jamaica','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'110', 'country'=>'Japan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'111', 'country'=>'Jordan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'112', 'country'=>'Kazakhstan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'113', 'country'=>'Kenya','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'114', 'country'=>'Kiribati','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'115', 'country'=>'Korea, Democratic People\'s Republic of','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'116', 'country'=>'Korea, Republic of','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'117', 'country'=>'Kosovo','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'118', 'country'=>'Kuwait','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'119', 'country'=>'Kyrgyzstan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'120', 'country'=>'Lao People\'s Democratic Republic','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'121', 'country'=>'Latvia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'122', 'country'=>'Lebanon','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'123', 'country'=>'Lesotho','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'124', 'country'=>'Liberia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'125', 'country'=>'Libyan Arab Jamahiriya','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'126', 'country'=>'Liechtenstein','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'127', 'country'=>'Lithuania','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'128', 'country'=>'Luxembourg','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'129', 'country'=>'Macau','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'130', 'country'=>'Macedonia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'131', 'country'=>'Madagascar','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'132', 'country'=>'Malawi','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'133', 'country'=>'Malaysia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'134', 'country'=>'Maldives','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'135', 'country'=>'Mali','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'136', 'country'=>'Malta','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'137', 'country'=>'Marshall Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'138', 'country'=>'Martinique','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'139', 'country'=>'Mauritania','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'140', 'country'=>'Mauritius','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'141', 'country'=>'Mayotte','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'142', 'country'=>'Mexico','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'143', 'country'=>'Micronesia, Federated States of','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'144', 'country'=>'Moldova, Republic of','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'145', 'country'=>'Monaco','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'146', 'country'=>'Mongolia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'147', 'country'=>'Montenegro','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'148', 'country'=>'Montserrat','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'149', 'country'=>'Morocco','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'150', 'country'=>'Mozambique','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'151', 'country'=>'Myanmar','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'152', 'country'=>'Namibia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'153', 'country'=>'Nauru','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'154', 'country'=>'Nepal','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'155', 'country'=>'Netherlands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'156', 'country'=>'Netherlands Antilles','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'157', 'country'=>'New Caledonia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'158', 'country'=>'New Zealand','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'159', 'country'=>'Nicaragua','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'160', 'country'=>'Niger','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'161', 'country'=>'Nigeria','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'162', 'country'=>'Niue','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'163', 'country'=>'Norfolk Island','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'164', 'country'=>'Northern Mariana Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'165', 'country'=>'Norway','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'166', 'country'=>'Oman','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'167', 'country'=>'Pakistan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'168', 'country'=>'Palau','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'169', 'country'=>'Palestine','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'170', 'country'=>'Panama','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'171', 'country'=>'Papua New Guinea','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'172', 'country'=>'Paraguay','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'173', 'country'=>'Peru','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'174', 'country'=>'Philippines','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'175', 'country'=>'Pitcairn','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'176', 'country'=>'Poland','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'177', 'country'=>'Portugal','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'178', 'country'=>'Puerto Rico','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'179', 'country'=>'Qatar','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'180', 'country'=>'Reunion','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'181', 'country'=>'Romania','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'182', 'country'=>'Russian Federation','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'183', 'country'=>'Rwanda','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'184', 'country'=>'Saint Kitts and Nevis','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'185', 'country'=>'Saint Lucia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'186', 'country'=>'Saint Vincent and the Grenadines','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'187', 'country'=>'Samoa','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'188', 'country'=>'San Marino','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'189', 'country'=>'Sao Tome and Principe','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'190', 'country'=>'Saudi Arabia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'191', 'country'=>'Senegal','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'192', 'country'=>'Serbia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'193', 'country'=>'Seychelles','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'194', 'country'=>'Sierra Leone','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'195', 'country'=>'Singapore','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'196', 'country'=>'Slovakia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'197', 'country'=>'Slovenia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'198', 'country'=>'Solomon Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'199', 'country'=>'Somalia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'200', 'country'=>'South Africa','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'201', 'country'=>'South Georgia South Sandwich Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'202', 'country'=>'Spain','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'203', 'country'=>'Sri Lanka','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'204', 'country'=>'St. Helena','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'205', 'country'=>'St. Pierre and Miquelon','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'206', 'country'=>'Sudan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'207', 'country'=>'Suriname','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'208', 'country'=>'Svalbard and Jan Mayen Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'209', 'country'=>'Swaziland','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'210', 'country'=>'Sweden','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'211', 'country'=>'Switzerland','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'212', 'country'=>'Syrian Arab Republic','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'213', 'country'=>'Taiwan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'214', 'country'=>'Tajikistan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'215', 'country'=>'Tanzania, United Republic of','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'216', 'country'=>'Thailand','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'217', 'country'=>'Togo','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'218', 'country'=>'Tokelau','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'219', 'country'=>'Tonga','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'220', 'country'=>'Trinidad and Tobago','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'221', 'country'=>'Tunisia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'222', 'country'=>'Turkey','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'223', 'country'=>'Turkmenistan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'224', 'country'=>'Turks and Caicos Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'225', 'country'=>'Tuvalu','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'226', 'country'=>'Uganda','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'227', 'country'=>'Ukraine','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'228', 'country'=>'United Arab Emirates','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'229', 'country'=>'United Kingdom','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'230', 'country'=>'United States','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'231', 'country'=>'United States minor outlying islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'232', 'country'=>'Uruguay','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'233', 'country'=>'Uzbekistan','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'234', 'country'=>'Vanuatu','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'235', 'country'=>'Vatican City State','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'236', 'country'=>'Venezuela','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'237', 'country'=>'Vietnam','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'238', 'country'=>'Virgin Islands (British)','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'239', 'country'=>'Virgin Islands (U.S.)','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'240', 'country'=>'Wallis and Futuna Islands','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'241', 'country'=>'Western Sahara','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'242', 'country'=>'Yemen','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'243', 'country'=>'Zaire','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'244', 'country'=>'Zambia','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
            ['id'=>'245', 'country'=>'Zimbabwe','created_at'=>\Carbon\Carbon::now(), 'updated_at'=>\Carbon\Carbon::now()],
        ]);
    }
}