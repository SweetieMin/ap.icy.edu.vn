<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\Contracts\SubjectRepositoryInterface;
use App\Models\Program;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy các program
        $kindergarten = Program::where('name', 'Anh ngữ mẫu giáo')->first();
        $kids = Program::where('name', 'Anh ngữ thiếu nhi')->first();
        $teenager = Program::where('name', 'Anh ngữ thiếu niên')->first();
        $communication = Program::where('name', 'Anh ngữ giao tiếp')->first();
        $business = Program::where('name', 'Anh ngữ doanh nghiệp')->first();
        $ielts = Program::where('name', 'Chứng chỉ IELTS')->first();
        $highschool = Program::where('name', 'Luyện thi vào lớp 10')->first();
        $thptqg = Program::where('name', 'Luyện thi THPT Quốc Gia')->first();

        $subjects = [
            // Anh ngữ mẫu giáo (Kindergarten) - HS mẫu giáo
            [
                'program_id' => $kindergarten->id,
                'name' => 'ICY Wonderland 1',
                'code' => 'IW1',
                'curriculum_name' => 'Everybody Up Starter',
                'ordering' => 1,
                'url_book' => 'https://online.flipbuilder.com/sdtta/yura/',
            ],
            [
                'program_id' => $kindergarten->id,
                'name' => 'ICY Wonderland 2',
                'code' => 'IW2',
                'curriculum_name' => 'Everybody Up Starter',
                'ordering' => 2,
                'url_book' => 'https://online.flipbuilder.com/sdtta/yura/',
            ],
            [
                'program_id' => $kindergarten->id,
                'name' => 'ICY Wonderland 3',
                'code' => 'IW3',
                'curriculum_name' => 'Everybody Up 1',
                'ordering' => 3,
                'url_book' => 'https://online.flipbuilder.com/sdtta/vypw/',
            ],
            [
                'program_id' => $kindergarten->id,
                'name' => 'ICY Wonderland 4',
                'code' => 'IW4',
                'curriculum_name' => 'Everybody Up 1',
                'ordering' => 4,
                'url_book' => 'https://online.flipbuilder.com/sdtta/vypw/',
            ],
            [
                'program_id' => $kindergarten->id,
                'name' => 'ICY Wonderland 5',
                'code' => 'IW5',
                'curriculum_name' => 'Everybody Up 2',
                'ordering' => 5,
                'url_book' => 'https://online.flipbuilder.com/sdtta/jqgr/',
            ],
            [
                'program_id' => $kindergarten->id,
                'name' => 'ICY Wonderland 6',
                'code' => 'IW6',
                'curriculum_name' => 'Everybody Up 2',
                'ordering' => 6,
                'url_book' => 'https://online.flipbuilder.com/sdtta/jqqr/',
            ],

            // Anh ngữ thiếu nhi (Kids) - HS cấp 1
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 1',
                'code' => 'IK1',
                'curriculum_name' => 'Family and Friends 1',
                'ordering' => 1,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/xncb/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 2',
                'code' => 'IK2',
                'curriculum_name' => 'Family and Friends 1',
                'ordering' => 2,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/xncb/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 3',
                'code' => 'IK3',
                'curriculum_name' => 'Family and Friends 1',
                'ordering' => 3,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/xncb/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 4',
                'code' => 'IK4',
                'curriculum_name' => 'Family and Friends 2',
                'ordering' => 4,
                'url_book' => 'https://online.flipbuilder.com/sdtta/arnd/mobile/index.html#p=1',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 5',
                'code' => 'IK5',
                'curriculum_name' => 'Family and Friends 2',
                'ordering' => 5,
                'url_book' => 'https://online.flipbuilder.com/sdtta/arnd/mobile/index.html#p=1',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 6',
                'code' => 'IK6',
                'curriculum_name' => 'Family and Friends 2',
                'ordering' => 6,
                'url_book' => 'https://online.flipbuilder.com/sdtta/arnd/mobile/index.html#p=1',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 7',
                'code' => 'IK7',
                'curriculum_name' => 'Family and Friends 3',
                'ordering' => 7,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/prio/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 8',
                'code' => 'IK8',
                'curriculum_name' => 'Family and Friends 3',
                'ordering' => 8,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/prio/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 9',
                'code' => 'IK9',
                'curriculum_name' => 'Family and Friends 3',
                'ordering' => 9,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/prio/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 10',
                'code' => 'IK10',
                'curriculum_name' => 'Family and Friends 4',
                'ordering' => 10,
                'url_book' => 'https://online.flipbuilder.com/sdtta/whif/mobile/index.html#p=1',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 11',
                'code' => 'IK11',
                'curriculum_name' => 'Family and Friends 4',
                'ordering' => 11,
                'url_book' => 'https://online.flipbuilder.com/sdtta/whif/mobile/index.html#p=2',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 12',
                'code' => 'IK12',
                'curriculum_name' => 'Family and Friends 4',
                'ordering' => 12,
                'url_book' => 'https://online.flipbuilder.com/sdtta/whif/mobile/index.html#p=3',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 13',
                'code' => 'IK13',
                'curriculum_name' => 'Family and Friends 5',
                'ordering' => 13,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/bcqw/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 14',
                'code' => 'IK14',
                'curriculum_name' => 'Family and Friends 5',
                'ordering' => 14,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/bcqw/',
            ],
            [
                'program_id' => $kids->id,
                'name' => 'ICY Kids 15',
                'code' => 'IK15',
                'curriculum_name' => 'Family and Friends 5',
                'ordering' => 15,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/bcqw/',
            ],

            // Anh ngữ thiếu niên (Teenager's English) - HS cấp 2
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 1',
                'code' => 'IT1',
                'curriculum_name' => 'Global Success 6',
                'ordering' => 1,
                'url_book' => 'https://online.flipbuilder.com/sdtta/sxmf/',
            ],
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 2',
                'code' => 'IT2',
                'curriculum_name' => 'Global Success 6',
                'ordering' => 2,
                'url_book' => 'https://online.flipbuilder.com/sdtta/sxmf/',
            ],
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 3',
                'code' => 'IT3',
                'curriculum_name' => 'Global Success 7',
                'ordering' => 3,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/rnke/',
            ],
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 4',
                'code' => 'IT4',
                'curriculum_name' => 'Global Success 7',
                'ordering' => 4,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/rnke/',
            ],
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 5',
                'code' => 'IT5',
                'curriculum_name' => 'Global Success 8',
                'ordering' => 5,
                'url_book' => 'https://online.flipbuilder.com/sdtta/xtnz/',
            ],
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 6',
                'code' => 'IT6',
                'curriculum_name' => 'Global Success 8',
                'ordering' => 6,
                'url_book' => 'https://online.flipbuilder.com/sdtta/xtnz/',
            ],
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 7',
                'code' => 'IT7',
                'curriculum_name' => 'Global Success 9',
                'ordering' => 7,
                'url_book' => 'https://online.flipbuilder.com/sdtta/gqmy/',
            ],
            [
                'program_id' => $teenager->id,
                'name' => 'ICY Teen 8',
                'code' => 'IT8',
                'curriculum_name' => 'Global Success 9',
                'ordering' => 8,
                'url_book' => 'https://online.flipbuilder.com/sdtta/gqmy/',
            ],

            // Anh ngữ giao tiếp (English for Communication) - 15+ (NGHE-NÓI)
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 1',
                'code' => 'IC1',
                'curriculum_name' => 'Tactics for Listening (Basic)',
                'ordering' => 1,
                'url_book' => 'https://online.flipbuilder.com/sdtta/fpva/mobile/index.html#p=1',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 2',
                'code' => 'IC2',
                'curriculum_name' => 'Tactics for Listening (Basic)',
                'ordering' => 2,
                'url_book' => 'https://online.flipbuilder.com/sdtta/fpva/mobile/index.html#p=2',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 3',
                'code' => 'IC3',
                'curriculum_name' => 'Tactics for Listening (Development)',
                'ordering' => 3,
                'url_book' => 'https://online.flipbuilder.com/sdtta/kjol/',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 4',
                'code' => 'IC4',
                'curriculum_name' => 'Tactics for Listening (Development)',
                'ordering' => 4,
                'url_book' => 'https://online.flipbuilder.com/sdtta/kjol/',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 5',
                'code' => 'IC5',
                'curriculum_name' => 'Tactics for Listening (Expanding)',
                'ordering' => 5,
                'url_book' => 'https://online.flipbuilder.com/sdtta/lmhe/',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 6',
                'code' => 'IC6',
                'curriculum_name' => 'Tactics for Listening (Expanding)',
                'ordering' => 6,
                'url_book' => 'https://online.flipbuilder.com/sdtta/lmhe/',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 7',
                'code' => 'IC7',
                'curriculum_name' => 'Market Leader 1',
                'ordering' => 7,
                'url_book' => 'https://fliphtml5.com/lhxm/vsqc/%D0%9B%D0%B8%D0%B4%D0%B5%D1%80%D0%A0%D1%8B%D0%BD%D0%B',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 8',
                'code' => 'IC8',
                'curriculum_name' => 'Market Leader 1',
                'ordering' => 8,
                'url_book' => 'https://fliphtml5.com/lhxm/vsqc/%D0%9B%D0%B8%D0%B4%D0%B5%D1%80%D0%A0%D1%8B%D0%BD%D0%B',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 9',
                'code' => 'IC9',
                'curriculum_name' => 'Market Leader 2',
                'ordering' => 9,
                'url_book' => 'https://fliphtml5.com/zgboo/crrc/Market Leader 3rd Edition %28Pre-Intermediate%29/82/',
            ],
            [
                'program_id' => $communication->id,
                'name' => 'ICY Communication 10',
                'code' => 'IC10',
                'curriculum_name' => 'Market Leader 2',
                'ordering' => 10,
                'url_book' => 'https://fliphtml5.com/zgboo/crrc/Market Leader 3rd Edition %28Pre-Intermediate%29/82/',
            ],

            // Anh ngữ doanh nghiệp (English for Business) - Doanh nghiệp
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 1',
                'code' => 'IB1',
                'curriculum_name' => 'Tactics for Listening (Basic)',
                'ordering' => 1,
                'url_book' => 'https://online.flipbuilder.com/sdtta/fpva/mobile/index.html#p=1',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 2',
                'code' => 'IB2',
                'curriculum_name' => 'Tactics for Listening (Development)',
                'ordering' => 2,
                'url_book' => 'https://online.flipbuilder.com/sdtta/kjol/',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 3',
                'code' => 'IB3',
                'curriculum_name' => 'Tactics for Listening (Expanding)',
                'ordering' => 3,
                'url_book' => 'https://online.flipbuilder.com/sdtta/lmhe/',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 4',
                'code' => 'IB4',
                'curriculum_name' => 'Market Leader 3 (Intermediate)',
                'ordering' => 4,
                'url_book' => 'https://fliphtml5.com/lpkv/exgt/basic',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 5',
                'code' => 'IB5',
                'curriculum_name' => 'Market Leader 3',
                'ordering' => 5,
                'url_book' => 'https://fliphtml5.com/lpkv/exgt/basic',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 6',
                'code' => 'IB6',
                'curriculum_name' => 'Market Leader 4 (Upper Intermediate)',
                'ordering' => 6,
                'url_book' => 'https://fliphtml5.com/vsnkg/dhte/Market Leader 3ed Upper Intermediate Course Book/1/',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 7',
                'code' => 'IB7',
                'curriculum_name' => 'Market Leader 4',
                'ordering' => 7,
                'url_book' => 'https://fliphtml5.com/vsnkg/dhte/Market Leader 3ed Upper Intermediate Course Book/1/',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 8',
                'code' => 'IB8',
                'curriculum_name' => 'Market Leader 5 (Advanced)',
                'ordering' => 8,
                'url_book' => 'https://fliphtml5.com/xjdvv/vzge/Market Leader Advanced/',
            ],
            [
                'program_id' => $business->id,
                'name' => 'ICY Business 9',
                'code' => 'IB9',
                'curriculum_name' => 'Market Leader 5',
                'ordering' => 9,
                'url_book' => 'https://fliphtml5.com/xjdvv/vzge/Market Leader Advanced/',
            ],

            // Chứng chỉ IELTS (IELTS Achievers) - Cơ bản đến nâng cao
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 1',
                'code' => 'II1',
                'curriculum_name' => 'Mindset for Ielts Foundation',
                'ordering' => 1,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/pfey/',
            ],
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 2',
                'code' => 'II2',
                'curriculum_name' => 'Mindset for Ielts Foundation',
                'ordering' => 2,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/pfey/',
            ],
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 3',
                'code' => 'II3',
                'curriculum_name' => 'Mindset for Ielts 1',
                'ordering' => 3,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/vhni/',
            ],
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 4',
                'code' => 'II4',
                'curriculum_name' => 'Mindset for Ielts 1',
                'ordering' => 4,
                'url_book' => 'https://online.flipbuilder.com/xtrvf/vhni/',
            ],
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 5',
                'code' => 'II5',
                'curriculum_name' => 'Mindset for Ielts 2',
                'ordering' => 5,
                'url_book' => 'https://online.flipbuilder.com/sdtta/mkpn/mobile/index.html',
            ],
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 6',
                'code' => 'II6',
                'curriculum_name' => 'Mindset for Ielts 2',
                'ordering' => 6,
                'url_book' => 'https://online.flipbuilder.com/sdtta/mkpn/mobile/index.html',
            ],
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 7',
                'code' => 'II7',
                'curriculum_name' => 'Mindset for Ielts 3',
                'ordering' => 7,
                'url_book' => 'https://online.flipbuilder.com/sdtta/uwdr/mobile/index.html',
            ],
            [
                'program_id' => $ielts->id,
                'name' => 'ICY Ielts 8',
                'code' => 'II8',
                'curriculum_name' => 'Mindset for Ielts 3',
                'ordering' => 8,
                'url_book' => 'https://online.flipbuilder.com/sdtta/uwdr/mobile/index.html',
            ],

            // Luyện thi vào 10 (Highschool Entrance) - HS thi vào 10
            [
                'program_id' => $highschool->id,
                'name' => 'ICY Highschool 1',
                'code' => 'IH1',
                'curriculum_name' => '25 chuyên đề ngữ pháp trọng tâm Trang Anh',
                'ordering' => 1,
            ],
            [
                'program_id' => $highschool->id,
                'name' => 'ICY Highschool 2',
                'code' => 'IH2',
                'curriculum_name' => '25 chuyên đề ngữ pháp trọng tâm Trang Anh',
                'ordering' => 2,
            ],
            [
                'program_id' => $highschool->id,
                'name' => 'ICY Highschool 3',
                'code' => 'IH3',
                'curriculum_name' => '35 đề vào 10 Mai Lan Hương (15 đề)',
                'ordering' => 3,
            ],
            [
                'program_id' => $highschool->id,
                'name' => 'ICY Highschool 4',
                'code' => 'IH4',
                'curriculum_name' => '35 đề vào 10 Mai Lan Hương (15 đề)',
                'ordering' => 4,
            ],
            [
                'program_id' => $highschool->id,
                'name' => 'ICY Highschool 5',
                'code' => 'IH5',
                'curriculum_name' => '35 đề vào 10 Mai Lan Hương (5 đề cuối + writing all 35)',
                'ordering' => 5,
            ],
            [
                'program_id' => $highschool->id,
                'name' => 'ICY Highschool 6',
                'code' => 'IH6',
                'curriculum_name' => 'Đề thi thật từ 2017 + Mock Test đề minh hoạ Parem năm',
                'ordering' => 6,
            ],

            // Luyện thi THPTQG (Higher Education Entrance) - HS thi vào THPT QG
            [
                'program_id' => $thptqg->id,
                'name' => 'ICY Unicollege 1',
                'code' => 'IU1',
                'curriculum_name' => '25 chuyên đề ngữ pháp trọng tâm Trang Anh',
                'ordering' => 1,
            ],
            [
                'program_id' => $thptqg->id,
                'name' => 'ICY Unicollege 2',
                'code' => 'IU2',
                'curriculum_name' => '25 chuyên đề ngữ pháp trọng tâm Trang Anh',
                'ordering' => 2,
            ],
            [
                'program_id' => $thptqg->id,
                'name' => 'ICY Unicollege 3',
                'code' => 'IU3',
                'curriculum_name' => '20 đề Penbook (10 đề)',
                'ordering' => 3,
            ],
            [
                'program_id' => $thptqg->id,
                'name' => 'ICY Unicollege 4',
                'code' => 'IU4',
                'curriculum_name' => '20 đề Penbook (10 đề)',
                'ordering' => 4,
            ],
            [
                'program_id' => $thptqg->id,
                'name' => 'ICY Unicollege 5',
                'code' => 'IU5',
                'curriculum_name' => '10 đề chính thức (Nội bộ)',
                'ordering' => 5,
            ],
            [
                'program_id' => $thptqg->id,
                'name' => 'ICY Unicollege 6',
                'code' => 'IU6',
                'curriculum_name' => 'Đề thi thật từ 2017 + Mock Test minh hoạ Parem năm',
                'ordering' => 6,
            ],
        ];

        foreach ($subjects as $subject) {
            app(SubjectRepositoryInterface::class)->create($subject, $subject['program_id']);
        }
    }
}