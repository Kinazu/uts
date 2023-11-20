<?php

use App\Grade;
use App\Mapel;
use App\Parents;
use App\Student;
use App\Subject;
use App\Teacher;
use App\Ujian;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Subset;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::create([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => bcrypt('admin'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        $user2 = User::create([
            'name'          => 'Mukhlis Amrullah',
            'email'         => 'amru@gmail.com',
            'password'      => bcrypt('amru'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user2->assignRole('Teacher');

        $teacher1 = Teacher::create([
                'user_id'           => $user2->id,
                'nama'              => 'Amru',
                'gender'            => 'male',
                'phone'             => '6969540014',
                'dateofbirth'       => '1990-04-11',
                'current_address'   => '63 Walnut Hill Drive',
                'permanent_address' => '385 Emma Street',
                'created_at'        => date("Y-m-d H:i:s")
        ]);
    
        $user3 = User::create([
            'name'          => 'adi',
            'email'         => 'adi@gmail.com',
            'password'      => bcrypt('adi'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Teacher');
        $teacher2 = Teacher::create([
                'user_id'           => $user3->id,
                'nama'              => 'Adi',
                'gender'            => 'male',
                'phone'             => '053895178',
                'dateofbirth'       => '1994-11-21',
                'current_address'   => '63 Walnut Hill Drive',
                'permanent_address' => '385 Emma Street',
                'created_at'        => date("Y-m-d H:i:s")
        ]);

        $user4 = User::create([
            'name'          => 'Arkham',
            'email'         => 'arkham@gmail.com',
            'password'      => bcrypt('arkham'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user4->assignRole('Teacher');
    
        $teacher3 = Teacher::create([
                'user_id'           => $user4->id,
                'nama'              => 'Arkham',
                'gender'            => 'male',
                'phone'             => '12041289521',
                'dateofbirth'       => '1989-03-19',
                'current_address'   => '63 Walnut Hill Drive',
                'permanent_address' => '385 Emma Street',
                'created_at'        => date("Y-m-d H:i:s")
        ]);
    
        $user5 = User::create([
            'name'          => 'Arif',
            'email'         => 'arif@gmail.com',
            'password'      => bcrypt('arif'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user5->assignRole('Teacher');
        $teacher4 = Teacher::create([
            'user_id'           => $user5->id,
            'nama'              => 'Arif',
            'gender'            => 'male',
            'phone'             => '1485129512',
            'dateofbirth'       => '1994-08-01',
            'current_address'   => '63 Walnut Hill Drive',
            'permanent_address' => '385 Emma Street',
            'created_at'        => date("Y-m-d H:i:s")
    ]);
        $user6 = User::create([
            'name'          => 'Zaki Julian',
            'email'         => 'zaki@gmail.com',
            'password'      => bcrypt('zaki'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user6->assignRole('Parent');
        
        $parents1 = Parents::create([
                 'user_id'           => $user6->id,
                 'gender'            => 'male',
                 'phone'             => '0147854545',
                 'current_address'   => '46 Custer Street',
                 'permanent_address' => '46 Custer Street',
                 'created_at'        => date("Y-m-d H:i:s")
         ]);

         $user6 = User::create([
            'name'          => 'Zakir',
            'email'         => 'zakir@gmail.com',
            'password'      => bcrypt('zakir'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user6->assignRole('Parent');
        $parents2 = Parents::create([
            'user_id'           => $user6->id,
            'gender'            => 'male',
                 'phone'             => '0147854545',
                 'current_address'   => '46 Custer Street',
                 'permanent_address' => '46 Custer Street',
                 'created_at'        => date("Y-m-d H:i:s")
         ]);
         $user7 = User::create([
            'name'          => 'azka',
            'email'         => 'azka@gmail.com',
            'password'      => bcrypt('azka'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user7->assignRole('Parent');
        $parents3 = Parents::create([
                 'user_id'           => $user7->id,
                 'gender'            => 'male',
                 'phone'             => '0147854545',
                 'current_address'   => '46 Custer Street',
                 'permanent_address' => '46 Custer Street',
                 'created_at'        => date("Y-m-d H:i:s")
         ]);
        $user8 = User::create([
            'name'          => 'Fatih Zakwan',
            'email'         => 'fatih@gmail.com',
            'password'      => bcrypt('fatih'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user8->assignRole('Student');
        
        $student1 = Student::create([
                'user_id'           => $user8->id,
                'nama'              => 'Fatih',
                'email'             => 'fatih@gmail.com',
                'parent_id'         => 1,
                'class_id'          => 1,
                'roll_number'       => 1,
                'subject_id'        => 1,
                'harian'            => '97',
                'uts'               => '93',
                'uas'               => '98',
                'gender'            => 'male',
                'phone'             => '7801256654',
                'dateofbirth'       => '2011-04-11',
                'current_address'   => '103 Pine Tree Lane',
                'permanent_address' => '103 Pine Tree Lane',
                'created_at'        => date("Y-m-d H:i:s")
        ]);
    
        $user9 = User::create([
            'name'          => 'Ali',
            'email'         => 'ali@gmail.com',
            'password'      => bcrypt('ali'),
            'created_at'    => now(),
        ]);
        
        $user9->assignRole('Student');

        $student2 = Student::create([
                'user_id'           => $user9->id,
                'nama'              => 'Ali',
                'email'             => 'ali@gmail.com',
                'parent_id'         => 1,
                'class_id'          => 1,
                'roll_number'       => 1,
                'subject_id'        => 2,
                'harian'            => '87',
                'uts'               => '83',
                'uas'               => '88',
                'gender'            => 'male',
                'phone'             => '0948124128',
                'dateofbirth'       => '2011-01-25',
                'current_address'   => '103 Pine Tree Lane',
                'permanent_address' => '103 Pine Tree Lane',
                'created_at'        => date("Y-m-d H:i:s")
        ]);
    
        $user10 = User::create([
            'name'          => 'Kai',
            'email'         => 'kai@gmail.com',
            'password'      => bcrypt('kai'),
            'created_at'    => now(),
        ]);
        
        $user10->assignRole('Student');

        $student3 = Student::create([
                'user_id'           => $user10->id,
                'nama'              => 'Kai',
                'email'             => 'kai@gmail.com',
                'parent_id'         => 1,
                'class_id'          => 2,
                'roll_number'       => 2,
                'subject_id'        => 3,
                'harian'            => '85',
                'uts'               => '90',
                'uas'               => '89',
                'gender'            => 'male',
                'phone'             => '0128418925',
                'dateofbirth'       => '2012-11-14',
                'current_address'   => '103 Pine Tree Lane',
                'permanent_address' => '103 Pine Tree Lane',
                'created_at'        => date("Y-m-d H:i:s")
        ]);
        // $studentsData = [
        //     ['name' => 'Fatih Zakwan', 'email' => 'fatih@gmail.com', 'password' => 'fatih', 'class_id' => 1, 'roll_number' => 1, 'gender' => 'male', 'phone' => '7801256654', 'dateofbirth' => '2011-04-11'],
        //     ['name' => 'Ali', 'email' => 'ali@gmail.com', 'password' => 'ali', 'class_id' => 1, 'roll_number' => 1, 'gender' => 'male', 'phone' => '0948124128', 'dateofbirth' => '2011-01-25'],
        //     ['name' => 'Kai', 'email' => 'kai@gmail.com', 'password' => 'kai', 'class_id' => 2, 'roll_number' => 2, 'gender' => 'male', 'phone' => '0128418925', 'dateofbirth' => '2012-11-14'],
        // ];
        
        // foreach ($studentsData as $studentData) {
        //     $user = User::create(array_merge($studentData, [
        //         'password' => bcrypt($studentData['password']),
        //         'created_at' => now(),
        //     ]));
        
        //     $user->assignRole('Student');
        
        //     Student::create(array_merge($studentData, [
        //         'user_id' => $user->id,
        //         'class_id' => 1,
        //         'current_address' => '103 Pine Tree Lane',
        //         'permanent_address' => '103 Pine Tree Lane',
        //         'created_at' => now(),
        //     ]));
        // }
        
        



        $grade1 = Grade::create([
            'teacher_id'        => 1,
            'class_numeric'     => 1,
            'class_name'        => '1 QBS',
            'class_description' => 'Kelas 1'
        ]);
        $grade2 = Grade::create([
            'teacher_id'        => 2,
            'class_numeric'     => 2,
            'class_name'        => '2 QBS',
            'class_description' => 'Kelas 2'
        ]);
        $grade3 = Grade::create([
            'teacher_id'        => 3,
            'class_numeric'     => 3,
            'class_name'        => '3 QBS',
            'class_description' => 'Kelas 3'
        ]);

        $harian = Ujian::create([
            'nama'        => 'Harian',
            'persentase'     => '10%',
        ]);

        $uts = Ujian::create([
            'nama'        => 'UTS',
            'persentase'     => '30%',
        ]);

        $uas = Ujian::create([
            'nama'        => 'UAS',
            'persentase'     => '40%',
        ]);


        Subject::create([
                'nama'              => 'MK',
                'nilai'        => '92',
                'student_id'           => $student1->id,
                'grade_id'          => $grade1->id,
                'teacher_id'        => $teacher1->id,
                'description'     => 'MK',
        ]);

        Subject::create([
            'nama'              => 'Bahasa Inggris',
            'nilai'             => '96',
            'student_id'           => $student1->id,
            'grade_id'          => $grade1->id,
            'teacher_id'        => $teacher2->id,
            'description'         => 'Bing'
        ]);

        Subject::create([
        'nama'              => 'Bahasa Arab',
        'nilai'             => '99',
        'student_id'           => $student1->id,
        'grade_id'          => $grade1->id,
        'teacher_id'        => $teacher3->id,
        'description'         => 'Barab'
        ]);

        Subject::create([
            'nama'              => 'QCB',
            'nilai'            => '91',
            'student_id'           => $student1->id,
            'grade_id'          => $grade1->id,
            'teacher_id'        => $teacher3->id,
            'description'         => 'qbc'
            ]);
    }
}