<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
    |--------------------------------------------------------------------------
    | ICY Kids 1
    |--------------------------------------------------------------------------
    */
        $ik1 = Subject::where('name', 'ICY Kids 1')->first();

        $lessons_ik1 = [
            [1, "Unit 1: What's this? – Lesson 1: School things", "school, bag, book, pen, apple", "What's this? It's a…", "Draw and label your school bag", "Identify classroom objects"],
            [2, "Unit 1: What's this? – Lesson 2: Vocabulary practice & Speaking", "ruler, pencil, desk, board", "Yes, it is. / No, it isn’t.", "Make a wordlist of 10 classroom objects", "Practice asking/answering 'What’s this?'"],
            [3, "Unit 1: What's this? – Lesson 3: Reading & Writing", "classroom, teacher, student", "Writing sentences with 'This is…'", "Write 5 sentences using 'This is…'", "Develop reading and writing skills"],
            [4, "Unit 2: Playtime! – Lesson 1: Toys", "teddy, ball, car, doll, kite", "Is this your teddy? Yes/No", "Bring a toy and introduce it", "Identify and name toys"],
            [5, "Unit 2: Playtime! – Lesson 2: Grammar practice & Listening", "robot, train, yo-yo, puzzle", "Whose …? It’s my …", "Make a toy flashcard set", "Practice ownership and yes/no answers"],
            [6, "Unit 2: Playtime! – Lesson 3: Speaking & Writing", "favorite, toy, play, game", "Talking about favorites", "Write about your favorite toy", "Express likes and favorites"],
            [7, "Unit 3: This is my nose! – Lesson 1: Body parts", "arm, leg, nose, eye, mouth", "This is my … / These are my …", "Draw and label body parts", "Identify body parts"],
            [8, "Unit 3: This is my nose! – Lesson 2: Describing animals", "elephant, giraffe, tiger, lion", "Describing animals", "Describe your favorite animal", "Describe animals with features"],
            [9, "Unit 3: This is my nose! – Lesson 3: Writing about my body", "big, small, long, short, tall", "Writing sentences: I have …", "Write 5 sentences: I have …", "Write about body parts"],
            [10, "Unit 4: He’s a hero! – Lesson 1: Jobs vocabulary", "teacher, doctor, nurse, mum", "He’s/She’s a …", "Draw and label jobs", "Learn vocabulary for jobs"],
            [11, "Unit 4: He’s a hero! – Lesson 2: Grammar practice & Speaking", "dad, driver, singer, student", "Is he/she a …? Yes/No", "Interview family: What’s your job?", "Practice asking about jobs"],
            [12, "Unit 4: He’s a hero! – Lesson 3: Writing about jobs", "job, work, uniform, school", "Writing about jobs", "Write 5 sentences about jobs", "Write about jobs"],
            [13, "Mid-term Test", "N/A", "Test review", "N/A", "Assess learning outcomes"],
            [14, "Unit 5: Where’s the ball? – Lesson 1: Park vocabulary", "ball, park, swing, slide", "Where’s the …?", "Draw the park and label", "Learn vocabulary about the park"],
            [15, "Unit 5: Where’s the ball? – Lesson 2: Prepositions of place", "tree, grass, bench, flower", "In/on/under", "Hide an object and say: Where’s the …?", "Use prepositions of place"],
            [16, "Unit 5: Where’s the ball? – Lesson 3: Writing about the park", "umbrella, sun, rain, cloud", "Writing prepositions", "Write 5 sentences with in/on/under", "Write about the park"],
            [17, "Unit 1–2 Review: Integrated practice", "school, toy, friend, number", "Review Units 1–2", "Make a Unit 1–2 word list", "Consolidate Units 1–2"],
            [18, "Unit 3–4 Review: Integrated practice", "body, family, zoo, animal", "Review Units 3–4", "Make a Unit 3–4 word list", "Consolidate Units 3–4"],
            [19, "Unit 5 Extension: Role-play & Writing", "park, game, ball, toy", "Role play using Unit 5", "Create a role-play about toys in the park", "Practice role-play with Unit 5"],
            [20, "Project Work: Puppet making & Presentation", "puppet, cut, glue, paper", "Project: Puppet instructions", "Make a puppet and describe it", "Complete a puppet project"],
            [21, "Project Work: Park poster & Presentation", "poster, draw, paint, color", "Project: Poster instructions", "Make a poster of the park", "Complete a park poster project"],
            [22, "Consolidation: Review & Mock Test", "review words all Units 1–5", "Integrated grammar review", "Review exercises Units 1–5", "Review grammar/vocabulary"],
            [23, "Final Review & Speaking practice", "revision: toys, jobs, body, park", "Speaking and grammar review", "Prepare oral presentation", "Prepare for final test"],
            [24, "Final Test", "N/A", "Final test", "N/A", "Assess overall course learning"],
        ];

        foreach ($lessons_ik1 as $lesson) {
            $ik1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }


        /*
    |--------------------------------------------------------------------------
    | ICY Kids 2
    |--------------------------------------------------------------------------
    */
        $ik2 = Subject::where('name', 'ICY Kids 2')->first();

        $lessons_ik2 = [
            [1, "Unit 6: Billy’s teddy! – Lesson 1", "Family members, Possessives", "Possessive 's", "Write 5 sentences about your family with possessives", "Students identify and use possessives correctly"],
            [2, "Unit 6: Billy’s teddy! – Lesson 2", "Family vocabulary, Jobs", "Question forms", "Interview a classmate about their family and write 5 sentences", "Students ask and answer family-related questions"],
            [3, "Unit 6: Billy’s teddy! – Lesson 3", "Review: My family, Jobs", "Sentence structure", "Draw and describe your family tree with 5 sentences", "Students describe their family structure using grammar points"],
            [4, "Fluency Time 2 & Review 2", "Play, park vocabulary", "Using question marks", "Create a short comic strip about a day in the park", "Students apply fluency and review vocabulary in creative writing"],
            [5, "Unit 7: Are these his trousers? – Lesson 1", "Clothes vocabulary", "This is/These are", "Label 10 clothing items at home in English", "Students identify and use clothing vocabulary"],
            [6, "Unit 7: Are these his trousers? – Lesson 2", "Describing clothes", "Yes/No questions", "Write 5 questions and answers about clothes", "Students describe and ask about clothing items"],
            [7, "Unit 7: Are these his trousers? – Lesson 3", "Clothes in context", "Sentence formation", "Bring a clothing item and describe it in class", "Students present vocabulary in context"],
            [8, "Unit 8: Where’s Grandma? – Lesson 1", "House, rooms", "Where is/are…?", "Draw a map of your house and label 5 rooms", "Students describe house and room locations"],
            [9, "Unit 8: Where’s Grandma? – Lesson 2", "Furniture, family", "Prepositions of place", "Write 5 sentences about where objects are in your house", "Students use prepositions correctly"],
            [10, "Unit 8: Where’s Grandma? – Lesson 3", "House and people", "There is/There are", "Describe your bedroom with 5 sentences", "Students write descriptive sentences about their homes"],
            [11, "Unit 9: Lunchtime! – Lesson 1", "Food vocabulary", "I’ve got…", "Write your lunch menu using 5 sentences", "Students identify and use food vocabulary"],
            [12, "Unit 9: Lunchtime! – Lesson 2", "Drinks and snacks", "Have got/Has got", "Interview classmates about their favorite food", "Students ask and answer questions using Have/Has got"],
            [13, "Mid-term Test", "Review Units 6–9", "Mixed grammar", "Prepare revision notes", "Students consolidate knowledge and demonstrate learning outcomes"],
            [14, "Unit 9: Lunchtime! – Lesson 3", "Meals, healthy food", "Using articles", "Write 5 sentences about your family’s meals", "Students describe meals using grammar points"],
            [15, "Unit 10: A new friend! – Lesson 1", "Friends, Shapes", "He’s/She’s got", "Write 5 sentences describing a friend", "Students describe their friends"],
            [16, "Unit 10: A new friend! – Lesson 2", "Describing people", "Contractions: He’s/She’s", "Create a character profile with 5 sentences", "Students write descriptions using contractions"],
            [17, "Unit 10: A new friend! – Lesson 3", "Shapes and features", "Hasn’t got", "Draw a friend and describe them with 5 sentences", "Students use shapes and features vocabulary"],
            [18, "Fluency Time 3 & Review 3", "Clothes, friends", "Sentence review", "Write a diary entry describing a school day", "Students integrate fluency practice with review"],
            [19, "Project Work: Clothes Cube", "Clothes vocabulary", "Imperatives", "Make a clothes cube game at home", "Students create a learning tool and practice vocabulary"],
            [20, "Project Work: Food Plate", "Food and drinks", "Articles (a/an, some)", "Design a healthy meal plate", "Students apply vocabulary and grammar creatively"],
            [21, "Project Work: My Bedroom Poster", "Furniture, house vocabulary", "Prepositions of place", "Create a poster of your bedroom and present", "Students present descriptive projects"],
            [22, "Review & Practice", "Units 6–10", "Mixed grammar", "Create a quiz for classmates", "Students practice peer learning through quiz creation"],
            [23, "Mock Test (Final Preparation)", "Units 6–10", "All grammar", "Complete a practice test", "Students prepare for final test"],
            [24, "Final Test", "Review Units 6–10", "Mixed grammar", "Complete final exam", "Students demonstrate overall achievement"],
        ];

        foreach ($lessons_ik2 as $lesson) {
            $ik2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }


        /*
    |--------------------------------------------------------------------------
    | ICY Kids 3
    |--------------------------------------------------------------------------
    */
        $ik3 = Subject::where('name', 'ICY Kids 3')->first();

        $lessons_ik3 = [
            [1, "Unit 11: I like monkeys! – Lesson 1", "Zoo animals", "I like… / I don’t like…", "Write 5 sentences about animals you like/don’t like", "Students express preferences with animals"],
            [2, "Unit 11: I like monkeys! – Lesson 2", "Adjectives for animals (big, small, long)", "They’ve got…", "Draw 3 animals and describe their features", "Students describe animal features"],
            [3, "Unit 11: I like monkeys! – Lesson 3", "Zoo animals review", "Questions with Do you like…?", "Interview classmates about favorite animals", "Students ask and answer questions about animals"],
            [4, "Unit 12: Dinnertime! – Lesson 1", "Food vocabulary (carrots, peas, yogurt)", "Do you like…? Yes/No", "Write your favorite dinner menu", "Students identify and talk about food preferences"],
            [5, "Unit 12: Dinnertime! – Lesson 2", "Meals and drinks", "I don’t like…", "Draw your favorite meal and write 5 sentences", "Students write about meals using negative form"],
            [6, "Unit 12: Dinnertime! – Lesson 3", "Healthy food", "Contractions with don’t/doesn’t", "Interview classmates about healthy food choices", "Students practice contractions in context"],
            [7, "Fluency Time 4 & Review 4", "Food, animals", "Mixed review", "Create a class menu and zoo poster", "Students integrate vocabulary creatively"],
            [8, "Unit 13: Tidy up! – Lesson 1", "Bedroom objects", "There’s/There are", "Draw your bedroom and label objects", "Students identify and describe objects in the bedroom"],
            [9, "Unit 13: Tidy up! – Lesson 2", "Numbers 11–20", "How many…?", "Count objects in your room and write sentences", "Students ask and answer using How many…"],
            [10, "Unit 13: Tidy up! – Lesson 3", "Furniture", "Prepositions of place", "Write 5 sentences describing object positions", "Students use prepositions correctly"],
            [11, "Unit 14: Action Boy can run! – Lesson 1", "Action verbs (run, jump, fly)", "Can/Can’t for ability", "Write 5 sentences about what you can/can’t do", "Students express abilities"],
            [12, "Unit 14: Action Boy can run! – Lesson 2", "Superhero actions", "He can/He can’t", "Draw a superhero and describe abilities", "Students describe actions with can/can’t"],
            [13, "Mid-term Test", "Review Units 11–14", "Mixed grammar", "Prepare study notes", "Students consolidate knowledge and demonstrate progress"],
            [14, "Unit 14: Action Boy can run! – Lesson 3", "Review of action verbs", "Negative with can’t", "Interview classmates about abilities", "Students practice asking and answering ability questions"],
            [15, "Unit 15: Let’s play ball! – Lesson 1", "Sports vocabulary (football, tennis, baseball)", "Let’s… for suggestions", "Write 5 sentences suggesting sports activities", "Students suggest activities using Let’s…"],
            [16, "Unit 15: Let’s play ball! – Lesson 2", "Sports equipment", "Imperatives (Play…, Don’t…)", "Make rules for a game", "Students use imperatives in context"],
            [17, "Unit 15: Let’s play ball! – Lesson 3", "Sports review", "Yes/No questions with sports", "Interview classmates about favorite sports", "Students ask and answer about sports preferences"],
            [18, "Unit 16: At the beach – Lesson 1", "Beach vocabulary (sand, sea, shells)", "There is/There are", "Draw the beach and write 5 sentences", "Students describe scenes at the beach"],
            [19, "Unit 16: At the beach – Lesson 2", "Beach activities (swim, play, run)", "Present continuous", "Write 5 sentences about beach activities", "Students describe actions at the beach"],
            [20, "Unit 16: At the beach – Lesson 3", "Review of beach activities", "Questions with What is… doing?", "Role-play a beach scene", "Students practice present continuous in context"],
            [21, "Fluency Time 5 & Review 5", "Sports, beach vocabulary", "Sentence review", "Create a class sports & beach poster", "Students integrate fluency with review content"],
            [22, "Project Work: Bedroom Poster", "Bedroom and house vocabulary", "Prepositions", "Make a poster of your bedroom", "Students apply project-based learning"],
            [23, "Mock Test (Final Preparation)", "Units 11–16", "Mixed grammar", "Complete a practice test", "Students prepare for final test"],
            [24, "Final Test", "Review Units 11–16", "Mixed grammar", "Complete final exam", "Students demonstrate overall achievement"],
        ];

        foreach ($lessons_ik3 as $lesson) {
            $ik3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 4
    |--------------------------------------------------------------------------
    */

        $ik4 = Subject::where('name', 'ICY Kids 4')->first();
        $lessons_ik4 = [
            [1, "Unit 1: Our new things – Lesson 1: School things", "School things", "This/That/These/Those", "Draw & label school things", "Identify school things"],
            [2, "Unit 1: Our new things – Lesson 2: Grammar & Phonics", "This/That/These/Those", "Review of alphabet & sounds", "Phonics matching worksheet", "Understand grammar structures"],
            [3, "Unit 1: Our new things – Lesson 3: Skills & Writing", "Identifying objects", "Using articles", "Write 3 sentences about your school things", "Develop writing skills"],
            [4, "Unit 2: They're happy now! – Lesson 1: Feelings", "Feelings", "We're/They're", "Make a feelings chart", "Identify and describe feelings"],
            [5, "Unit 2: They're happy now! – Lesson 2: Grammar & Phonics", "We're/They're", "Review of digraphs", "Phonics practice with ch/sh/th", "Practice phonics and grammar"],
            [6, "Unit 2: They're happy now! – Lesson 3: Skills & Writing", "Talking about feelings", "Short forms & writing", "Write about your feelings", "Write short sentences about feelings"],
            [7, "Unit 3: I can ride a bike! – Lesson 1: Outdoor activities", "Outdoor activities", "Can/Can't, Prepositions", "List 5 outdoor activities", "Talk about outdoor activities"],
            [8, "Unit 3: I can ride a bike! – Lesson 2: Grammar & CVC words", "Can/Can't, Prepositions", "Review of CVC words", "CVC word crossword", "Recognize CVC words"],
            [9, "Unit 3: I can ride a bike! – Lesson 3: Skills & Writing", "Writing about activities", "Using can/can't", "Write what you can/can’t do", "Write about what you can/can't do"],
            [10, "Fluency Time 1 + Classroom language", "Fluency expressions", "Classroom expressions", "Prepare classroom dialogues", "Practice fluency"],
            [11, "Project: A school word wheel", "Word wheel vocabulary", "N/A", "Make a mini word wheel", "Develop vocabulary project"],
            [12, "Review 1 + Speaking & Listening practice", "Review vocabulary", "Revision", "Do review worksheet", "Consolidate knowledge"],
            [13, "Mid-term Test", "N/A", "N/A", "Mid-term test", "Assess learning progress"],
            [14, "Unit 4: Have you got a milkshake? – Lesson 1: Food & Numbers", "Food, Numbers 20–100", "Have you got...? Yes, I have/No, I haven't", "Make a food diary", "Identify food & numbers"],
            [15, "Unit 4: Have you got a milkshake? – Lesson 2: Grammar & Consonant blends", "Have you got...?", "Consonant blends gr, fr", "Food bingo", "Use Have you got...? structures"],
            [16, "Unit 4: Have you got a milkshake? – Lesson 3: Skills & Writing", "Food items & lunch", "Questions with Have you got...?", "Write about your lunch", "Write about food items"],
            [17, "Unit 5: We've got English! – Lesson 1: School subjects", "School subjects", "What/When have we got...? We've got...", "Create timetable of your subjects", "Name school subjects"],
            [18, "Unit 5: We've got English! – Lesson 2: Grammar & Consonant blends", "What/When have we got...?", "Consonant blends cr, tr", "Label school subjects", "Ask/answer questions about school"],
            [19, "Unit 5: We've got English! – Lesson 3: Skills & Writing", "Talking about school", "Capital letters & writing", "Write about your favorite subject", "Write about my school subjects"],
            [20, "Unit 6: Let's play after school! – Lesson 1: After-school activities", "After-school activities", "I visit..., I don't have...", "Interview classmates about after-school", "Describe after-school activities"],
            [21, "Unit 6: Let's play after school! – Lesson 2: Grammar & Consonant blends", "I visit..., I don't have...", "Consonant blends fl, pl, bl", "Activity flashcards", "Practice grammar & phonics"],
            [22, "Unit 6: Let's play after school! – Lesson 3: Skills & Writing", "Writing about activities", "Writing about after school", "Write what you do after school", "Write about daily activities"],
            [23, "Fluency Time 2 + Shopping project", "Shopping vocabulary", "Shopping language", "Shopping role-play", "Practice shopping language"],
            [24, "Project: A market stall + Review 2", "Market stall language", "Project grammar", "Design a market stall poster", "Apply language in a project"],
        ];

        foreach ($lessons_ik4 as $lesson) {
            $ik4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 5
    |--------------------------------------------------------------------------
    */

        $ik5 = Subject::where('name', 'ICY Kids 5')->first();

        $lessons_ik5 = [
            [1, "Unit 6: Let's play after school - Lesson 1", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Workbook exercises", "Identify and use after-school activities"],
            [2, "Unit 6: Let's play after school - Lesson 2", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Make sentences with new vocab", "Use present simple to talk about routines"],
            [3, "Unit 6: Let's play after school - Lesson 3", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Draw and label", "Develop vocabulary related to school and play"],
            [4, "Fluency Time 2 & Project: Shopping", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Interview a friend", "Apply grammar structures in context"],
            [5, "Review 2", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Write a short paragraph", "Practice speaking through pair activities"],
            [6, "Unit 7: Let's buy presents - Lesson 1", "present, card, cake, party, gift", "He likes …, He doesn’t like …", "Matching activity", "Enhance listening comprehension"],
            [7, "Unit 7: Let's buy presents - Lesson 2", "present, card, cake, party, gift", "He likes …, He doesn’t like …", "Role-play", "Describe likes and dislikes"],
            [8, "Unit 7: Let's buy presents - Lesson 3", "present, card, cake, party, gift", "He likes …, He doesn’t like …", "Listening task", "Ask and answer about preferences"],
            [9, "Unit 8: What's the time? - Lesson 1", "morning, afternoon, evening, clock, o’clock", "What’s the time?, It’s … o’clock, He … at … o’clock", "Make a shopping list", "Use vocabulary related to presents"],
            [10, "Unit 8: What's the time? - Lesson 2", "morning, afternoon, evening, clock, o’clock", "What’s the time?, It’s … o’clock, He … at … o’clock", "Project preparation", "Communicate shopping needs"],
            [11, "Unit 8: What's the time? - Lesson 3", "morning, afternoon, evening, clock, o’clock", "What’s the time?, It’s … o’clock, He … at … o’clock", "Flashcard practice", "Participate in a role-play at the market"],
            [12, "Unit 9: Where does she work? - Lesson 1", "school, hospital, office, restaurant, factory", "Where does he/she work?, He works in …, Does she work in …?", "Mini-presentation", "Improve reading comprehension"],
            [13, "Mid-term Test", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Grammar drills", "Mid-term Test"],
            [14, "Unit 9: Where does she work? - Lesson 2", "school, hospital, office, restaurant, factory", "Where does he/she work?, He works in …, Does she work in …?", "Mid-term revision", "Tell the time accurately"],
            [15, "Unit 9: Where does she work? - Lesson 3", "school, hospital, office, restaurant, factory", "Where does he/she work?, He works in …, Does she work in …?", "Storytelling", "Describe daily routines"],
            [16, "Fluency Time 3 & Project: Mini book", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Creative writing", "Use Wh-questions in context"],
            [17, "Review 3", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Worksheet practice", "Talk about places and jobs"],
            [18, "Unit 10: It's hot today! - Lesson 1", "sunny, rainy, cloudy, hot, cold", "What’s the weather like?, It’s …, Put on / Don’t put on …", "Pair work dialogue", "Write about family occupations"],
            [19, "Unit 10: It's hot today! - Lesson 2", "sunny, rainy, cloudy, hot, cold", "What’s the weather like?, It’s …, Put on / Don’t put on …", "Speaking practice", "Make a simple plan"],
            [20, "Unit 10: It's hot today! - Lesson 3", "sunny, rainy, cloudy, hot, cold", "What’s the weather like?, It’s …, Put on / Don’t put on …", "Homework quiz", "Present a mini project"],
            [21, "Fluency Time 4: At a party", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Research task", "Describe the weather"],
            [22, "Review 4", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Make a weather chart", "Give advice about clothing in weather"],
            [23, "Consolidation & Project sharing", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Project report", "Consolidate vocabulary and grammar"],
            [24, "Final Test", "visit, playground, homework, friends, sports", "I visit …, I don’t have …", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik5 as $lesson) {
            $ik5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 6
    |--------------------------------------------------------------------------
    */
        $ik6 = Subject::where('name', 'ICY Kids 6')->first();

        $lessons_ik6 = [
            [1, "Unit 11: What are you wearing? - Lesson 1", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Workbook exercises", "Identify clothes vocabulary"],
            [2, "Unit 11: What are you wearing? - Lesson 2", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Make sentences with new vocab", "Use present continuous to describe clothing"],
            [3, "Unit 11: What are you wearing? - Lesson 3", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Draw and label", "Write simple sentences about outfits"],
            [4, "Unit 12: You're sleeping! - Lesson 1", "party, cake, balloons, dance, gift", "What are you/they doing?, I’m/We’re/They’re …, He’s/She’s …", "Interview a friend", "Describe party activities"],
            [5, "Unit 12: You're sleeping! - Lesson 2", "party, cake, balloons, dance, gift", "What are you/they doing?, I’m/We’re/They’re …, He’s/She’s …", "Write a short paragraph", "Practice using continuous tense in context"],
            [6, "Unit 12: You're sleeping! - Lesson 3", "party, cake, balloons, dance, gift", "What are you/they doing?, I’m/We’re/They’re …, He’s/She’s …", "Matching activity", "Enhance listening comprehension for actions"],
            [7, "Fluency Time 4 & Project: A present", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Role-play", "Review present continuous through games"],
            [8, "Review 4", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Listening task", "Develop speaking fluency about daily activities"],
            [9, "Unit 13: Look at all the animals! - Lesson 1", "cow, sheep, chicken, bigger, smaller", "This cow is bigger than that cow.", "Project preparation", "Participate in project work"],
            [10, "Unit 13: Look at all the animals! - Lesson 2", "cow, sheep, chicken, bigger, smaller", "This cow is bigger than that cow.", "Flashcard practice", "Describe farm animals"],
            [11, "Unit 13: Look at all the animals! - Lesson 3", "cow, sheep, chicken, bigger, smaller", "This cow is bigger than that cow.", "Mini-presentation", "Use comparatives in sentences"],
            [12, "Unit 14: Look at the photos! - Lesson 1", "photo, memory, clean, tidy, mess", "I was/wasn’t …, You were/weren’t …", "Grammar drills", "Enhance reading comprehension with animals"],
            [13, "Mid-term Test", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Mid-term revision", "Mid-term Test"],
            [14, "Unit 14: Look at the photos! - Lesson 2", "photo, memory, clean, tidy, mess", "I was/wasn’t …, You were/weren’t …", "Storytelling", "Talk about past experiences"],
            [15, "Unit 14: Look at the photos! - Lesson 3", "photo, memory, clean, tidy, mess", "I was/wasn’t …, You were/weren’t …", "Creative writing", "Use past simple in context"],
            [16, "Unit 15: Well done! - Lesson 1", "first, second, third, students, teachers", "There were some/weren’t any …, Irregular plurals", "Worksheet practice", "Write about memories"],
            [17, "Unit 15: Well done! - Lesson 2", "first, second, third, students, teachers", "There were some/weren’t any …, Irregular plurals", "Pair work dialogue", "Describe tidying up activities"],
            [18, "Unit 15: Well done! - Lesson 3", "first, second, third, students, teachers", "There were some/weren’t any …, Irregular plurals", "Speaking practice", "Practice irregular plurals"],
            [19, "Fluency Time 5: Playing games", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Homework quiz", "Use ordinal numbers in real-life contexts"],
            [20, "Project: A card game", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Research task", "Create a group project on school events"],
            [21, "Review 5", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Make a project poster", "Play language games for fluency"],
            [22, "Culture lesson: Games, Meals, At home", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Oral presentation", "Prepare and present a card game project"],
            [23, "Consolidation & sharing", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Consolidation project", "Review and consolidate learning"],
            [24, "Final Test", "shirt, dress, pants, hat, shoes", "What are you wearing?, What’s he/she wearing?, I’m/He’s wearing …", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik6 as $lesson) {
            $ik6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 7
    |--------------------------------------------------------------------------
    */

        $ik7 = Subject::where('name', 'ICY Kids 7')->first();

        $lessons_ik7 = [
            [1, "Unit 1: They're from Australia! - Lesson 1", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Workbook exercises", "Introduce yourself and others"],
            [2, "Unit 1: They're from Australia! - Lesson 2", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Make sentences with new vocab", "Talk about countries and origins"],
            [3, "Unit 1: They're from Australia! - Lesson 3", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Draw and label", "Use present simple of be in sentences"],
            [4, "Unit 2: My weekend - Lesson 1", "reading, swimming, dancing, playing, singing", "I like …, I don’t like …, Does he like …?, Yes, he does / No, he doesn’t", "Interview a classmate", "Talk about hobbies and interests"],
            [5, "Unit 2: My weekend - Lesson 2", "reading, swimming, dancing, playing, singing", "I like …, I don’t like …, Does he like …?, Yes, he does / No, he doesn’t", "Write a short paragraph", "Express likes and dislikes"],
            [6, "Unit 2: My weekend - Lesson 3", "reading, swimming, dancing, playing, singing", "I like …, I don’t like …, Does he like …?, Yes, he does / No, he doesn’t", "Matching activity", "Use yes/no questions with likes"],
            [7, "Unit 3: My things - Lesson 1", "car, park, star, scarf, skirt", "That’s their …, Can I use your …?, Yes, you can / No, you can’t", "Role-play", "Identify personal belongings"],
            [8, "Unit 3: My things - Lesson 2", "car, park, star, scarf, skirt", "That’s their …, Can I use your …?, Yes, you can / No, you can’t", "Listening practice", "Make requests using can"],
            [9, "Unit 3: My things - Lesson 3", "car, park, star, scarf, skirt", "That’s their …, Can I use your …?, Yes, you can / No, you can’t", "Make a survey chart", "Compare items in collections"],
            [10, "Fluency Time 1 & Project: Survey chart", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Project preparation", "Summarize learning with a project"],
            [11, "Review 1", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Flashcard practice", "Review present simple structures"],
            [12, "Unit 4: We're having fun at the beach! - Lesson 1", "swimming, snorkeling, beach, holiday, trip", "I’m swimming, She isn’t snorkeling, Are they …?", "Mini-presentation", "Enhance speaking fluency"],
            [13, "Mid-term Test", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Mid-term revision", "Mid-term Test"],
            [14, "Unit 4: We're having fun at the beach! - Lesson 2", "swimming, snorkeling, beach, holiday, trip", "I’m swimming, She isn’t snorkeling, Are they …?", "Grammar drills", "Describe activities at the beach"],
            [15, "Unit 4: We're having fun at the beach! - Lesson 3", "swimming, snorkeling, beach, holiday, trip", "I’m swimming, She isn’t snorkeling, Are they …?", "Storytelling", "Use present continuous for actions"],
            [16, "Unit 5: A naughty monkey! - Lesson 1", "monkey, lion, zebra, sandwich, zoo", "Is the crocodile eating the sandwich?, Yes, it is / No, it isn’t", "Worksheet practice", "Describe places with adjectives"],
            [17, "Unit 5: A naughty monkey! - Lesson 2", "monkey, lion, zebra, sandwich, zoo", "Is the crocodile eating the sandwich?, Yes, it is / No, it isn’t", "Pair work dialogue", "Talk about zoo animals"],
            [18, "Unit 5: A naughty monkey! - Lesson 3", "monkey, lion, zebra, sandwich, zoo", "Is the crocodile eating the sandwich?, Yes, it is / No, it isn’t", "Speaking practice", "Use present continuous in questions"],
            [19, "Fluency Time 2: Abilities", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Homework quiz", "Answer short questions about animals"],
            [20, "Project: A poster", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Creative writing", "Work on project: Poster"],
            [21, "Review 2", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Project design", "Present abilities using can"],
            [22, "Extensive Reading: Family & Animals", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Oral presentation", "Participate in review activities"],
            [23, "Consolidation & sharing", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Consolidation & review", "Prepare for consolidation"],
            [24, "Final Test", "country, season, home, Egypt, Australia", "I’m from …, I’m not from …, Are you from …?", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik7 as $lesson) {
            $ik7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 8
    |--------------------------------------------------------------------------
    */
        $ik8 = Subject::where('name', 'ICY Kids 8')->first();

        $lessons_ik8 = [
            [1, "Unit 6: Jim’s day - Lesson 1", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Workbook exercises", "Describe daily routines"],
            [2, "Unit 6: Jim’s day - Lesson 2", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Make sentences with new vocab", "Use present simple in questions"],
            [3, "Unit 6: Jim’s day - Lesson 3", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Draw and label", "Talk about time expressions"],
            [4, "Fluency Time 2: Abilities", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Interview a classmate", "Describe abilities using can"],
            [5, "Review 2 & Project: Poster", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Write a short paragraph", "Make a poster project"],
            [6, "Unit 7: Places to go! - Lesson 1", "library, cinema, theater, museum, park", "I sometimes go to the library, I never go to the cinema, On … / In …", "Matching activity", "Review grammar structures"],
            [7, "Unit 7: Places to go! - Lesson 2", "library, cinema, theater, museum, park", "I sometimes go to the library, I never go to the cinema, On … / In …", "Role-play", "Talk about places in town"],
            [8, "Unit 7: Places to go! - Lesson 3", "library, cinema, theater, museum, park", "I sometimes go to the library, I never go to the cinema, On … / In …", "Listening practice", "Use adverbs of frequency"],
            [9, "Unit 8: I’d like a melon! - Lesson 1", "apple, bread, melon, rice, milk", "I’d like …, Would you like …?, Yes, please / No, thanks", "Project preparation", "Describe performances"],
            [10, "Unit 8: I’d like a melon! - Lesson 2", "apple, bread, melon, rice, milk", "I’d like …, Would you like …?, Yes, please / No, thanks", "Flashcard practice", "Express food preferences"],
            [11, "Unit 8: I’d like a melon! - Lesson 3", "apple, bread, melon, rice, milk", "I’d like …, Would you like …?, Yes, please / No, thanks", "Mini-presentation", "Use countable and uncountable nouns"],
            [12, "Unit 9: The fastest animal in the world - Lesson 1", "mountain, river, desert, biggest, fastest", "Russia is bigger than the UK, The highest mountain is …", "Grammar drills", "Role-play at the market"],
            [13, "Mid-term Test", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Mid-term revision", "Mid-term Test"],
            [14, "Unit 9: The fastest animal in the world - Lesson 2", "mountain, river, desert, biggest, fastest", "Russia is bigger than the UK, The highest mountain is …", "Storytelling", "Describe geographical features"],
            [15, "Unit 9: The fastest animal in the world - Lesson 3", "mountain, river, desert, biggest, fastest", "Russia is bigger than the UK, The highest mountain is …", "Creative writing", "Use comparatives in context"],
            [16, "Fluency Time 3: Giving directions", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Worksheet practice", "Use superlatives correctly"],
            [17, "Project: A map of an island", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Pair work dialogue", "Give directions using map language"],
            [18, "Review 3", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Speaking practice", "Participate in project work"],
            [19, "Unit 10: In the park! - Lesson 1", "walk, run, play, phone, grass", "You must turn off your mobile phone, You mustn’t walk on the grass", "Homework quiz", "Review and consolidate vocabulary"],
            [20, "Unit 10: In the park! - Lesson 2", "walk, run, play, phone, grass", "You must turn off your mobile phone, You mustn’t walk on the grass", "Research task", "Describe park activities"],
            [21, "Unit 10: In the park! - Lesson 3", "walk, run, play, phone, grass", "You must turn off your mobile phone, You mustn’t walk on the grass", "Project map", "Use must/mustn’t for rules"],
            [22, "Extensive Reading: Food & Transport", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Oral presentation", "Talk about obligations"],
            [23, "Consolidation & sharing", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Consolidation & review", "Prepare final project presentation"],
            [24, "Final Test", "breakfast, school, homework, time, day", "I have breakfast at eight o’clock, Do they live in a big house?, Yes, they do / No, they don’t", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik8 as $lesson) {
            $ik8->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 9
    |--------------------------------------------------------------------------
    */
        $ik9 = Subject::where('name', 'ICY Kids 9')->first();

        $lessons_ik9 = [
            [1, "Unit 11: In the museum - Lesson 1", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Workbook exercises", "Describe transport vocabulary"],
            [2, "Unit 11: In the museum - Lesson 2", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Make sentences with new vocab", "Use past simple with be"],
            [3, "Unit 11: In the museum - Lesson 3", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Draw and label", "Talk about prepositions of place"],
            [4, "Unit 12: A clever baby! - Lesson 1", "baby, clever, happy, family, holiday", "I wasn’t tall when I was five, You were happy on holiday", "Interview a classmate", "Describe people using adjectives"],
            [5, "Unit 12: A clever baby! - Lesson 2", "baby, clever, happy, family, holiday", "I wasn’t tall when I was five, You were happy on holiday", "Write a short paragraph", "Use past simple with have"],
            [6, "Unit 12: A clever baby! - Lesson 3", "baby, clever, happy, family, holiday", "I wasn’t tall when I was five, You were happy on holiday", "Matching activity", "Write short sentences about family"],
            [7, "Fluency Time 4: Describing people", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Role-play", "Describe people at a party"],
            [8, "Project: A party scene", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Listening practice", "Participate in review activities"],
            [9, "Review 4", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Project preparation", "Talk about history and Egypt"],
            [10, "Unit 13: The Ancient Egyptians - Lesson 1", "Egypt, pyramid, history, poster, ancient", "They lived 5,000 years ago, They didn’t cook pizza", "Flashcard practice", "Use past simple regular verbs"],
            [11, "Unit 13: The Ancient Egyptians - Lesson 2", "Egypt, pyramid, history, poster, ancient", "They lived 5,000 years ago, They didn’t cook pizza", "Mini-presentation", "Write short history facts"],
            [12, "Unit 13: The Ancient Egyptians - Lesson 3", "Egypt, pyramid, history, poster, ancient", "They lived 5,000 years ago, They didn’t cook pizza", "Grammar drills", "Enhance reading comprehension"],
            [13, "Mid-term Test", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Mid-term revision", "Mid-term Test"],
            [14, "Unit 14: Did you have a good day? - Lesson 1", "school, camping, trip, movie, tent", "Did you have a good day?, Yes, I did / No, I didn’t, What did you watch?, I watched …", "Storytelling", "Talk about school trips"],
            [15, "Unit 14: Did you have a good day? - Lesson 2", "school, camping, trip, movie, tent", "Did you have a good day?, Yes, I did / No, I didn’t, What did you watch?, I watched …", "Creative writing", "Use past simple questions"],
            [16, "Unit 14: Did you have a good day? - Lesson 3", "school, camping, trip, movie, tent", "Did you have a good day?, Yes, I did / No, I didn’t, What did you watch?, I watched …", "Worksheet practice", "Describe camping activities"],
            [17, "Unit 15: Our holiday! - Lesson 1", "holiday, beach, basketball, sea, swim", "He’s going to play basketball tomorrow, Are you going to swim in the sea?, Yes, I am / No, I’m not", "Pair work dialogue", "Make sentences with Wh-questions"],
            [18, "Unit 15: Our holiday! - Lesson 2", "holiday, beach, basketball, sea, swim", "He’s going to play basketball tomorrow, Are you going to swim in the sea?, Yes, I am / No, I’m not", "Speaking practice", "Use be going to for future plans"],
            [19, "Unit 15: Our holiday! - Lesson 3", "holiday, beach, basketball, sea, swim", "He’s going to play basketball tomorrow, Are you going to swim in the sea?, Yes, I am / No, I’m not", "Homework quiz", "Talk about holiday activities"],
            [20, "Fluency Time 5: Talking about holidays", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Research task", "Write short holiday plans"],
            [21, "Project: A photo album", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Make a photo album", "Present a photo album project"],
            [22, "Review 5", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Oral presentation", "Review and consolidate grammar"],
            [23, "Consolidation & sharing", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Consolidation & review", "Prepare for consolidation"],
            [24, "Final Test", "bus, train, car, museum, ticket", "There was / wasn’t …, There were / weren’t …, Time phrases: yesterday, last week", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik9 as $lesson) {
            $ik9->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 10
    |--------------------------------------------------------------------------
    */
        $ik10 = Subject::where('name', 'ICY Kids 10')->first();

        $lessons_ik10 = [
            [1, "Unit 1: The food here is great! - Lesson 1", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Workbook exercises", "Talk about meals and food preferences"],
            [2, "Unit 1: The food here is great! - Lesson 2", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Make sentences with new vocab", "Use present simple for routines"],
            [3, "Unit 1: The food here is great! - Lesson 3", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Draw and label", "Use present continuous for current actions"],
            [4, "Unit 2: We had a concert - Lesson 1", "concert, singer, audience, stage, song", "Our friends were there, The audience clapped and cheered", "Interview a classmate", "Talk about concerts and music events"],
            [5, "Unit 2: We had a concert - Lesson 2", "concert, singer, audience, stage, song", "Our friends were there, The audience clapped and cheered", "Write a short paragraph", "Use past simple with have/be"],
            [6, "Unit 2: We had a concert - Lesson 3", "concert, singer, audience, stage, song", "Our friends were there, The audience clapped and cheered", "Matching activity", "Describe past experiences"],
            [7, "Unit 3: The dinosaur museum - Lesson 1", "dinosaur, museum, data, history, exhibit", "We didn’t go to school, What did you see?", "Role-play", "Talk about dinosaurs and museums"],
            [8, "Unit 3: The dinosaur museum - Lesson 2", "dinosaur, museum, data, history, exhibit", "We didn’t go to school, What did you see?", "Listening practice", "Use irregular verbs in past simple"],
            [9, "Unit 3: The dinosaur museum - Lesson 3", "dinosaur, museum, data, history, exhibit", "We didn’t go to school, What did you see?", "Project preparation", "Ask and answer about museum visits"],
            [10, "Fluency Time 1 & Project: Cafe menu", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Flashcard practice", "Order food in a restaurant"],
            [11, "Review 1", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Mini-presentation", "Participate in project: Cafe menu"],
            [12, "Unit 4: Whose jacket is it this? - Lesson 1", "tennis, football, jacket, player, coach", "Whose jacket is this?, It’s mine / yours / his / hers / ours / theirs", "Grammar drills", "Review grammar structures"],
            [13, "Mid-term Test", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Mid-term revision", "Mid-term Test"],
            [14, "Unit 4: Whose jacket is it this? - Lesson 2", "tennis, football, jacket, player, coach", "Whose jacket is this?, It’s mine / yours / his / hers / ours / theirs", "Storytelling", "Talk about sports and activities"],
            [15, "Unit 4: Whose jacket is it this? - Lesson 3", "tennis, football, jacket, player, coach", "Whose jacket is this?, It’s mine / yours / his / hers / ours / theirs", "Creative writing", "Use possessive pronouns correctly"],
            [16, "Unit 5: Go back to the roundabout! - Lesson 1", "road, bus, theatre, roundabout, station", "We have to go back to the roundabout, Why are we at this station?", "Worksheet practice", "Use adverbs of frequency"],
            [17, "Unit 5: Go back to the roundabout! - Lesson 2", "road, bus, theatre, roundabout, station", "We have to go back to the roundabout, Why are we at this station?", "Pair work dialogue", "Give and understand directions"],
            [18, "Unit 5: Go back to the roundabout! - Lesson 3", "road, bus, theatre, roundabout, station", "We have to go back to the roundabout, Why are we at this station?", "Speaking practice", "Use have to / had to in context"],
            [19, "Fluency Time 2: Making phone calls", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Homework quiz", "Practice transport vocabulary"],
            [20, "Project: A telephone", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Research task", "Make a phone call role-play"],
            [21, "Review 2", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Project design", "Participate in telephone project"],
            [22, "Extensive Reading: Fossils & Sport", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Oral presentation", "Review and consolidate vocabulary"],
            [23, "Consolidation & sharing", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Consolidation & review", "Prepare for consolidation"],
            [24, "Final Test", "breakfast, lunch, dinner, restaurant, food", "What do you like for breakfast?, They usually wear blue uniforms, I’m wearing white today", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik10 as $lesson) {
            $ik10->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 11
    |--------------------------------------------------------------------------
    */
        $ik11 = Subject::where('name', 'ICY Kids 11')->first();

        $lessons_ik11 = [
            [1, "Unit 6: The best bed! - Lesson 1", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Workbook exercises", "Describe objects using comparatives"],
            [2, "Unit 6: The best bed! - Lesson 2", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Make sentences with new vocab", "Use superlative adjectives in context"],
            [3, "Unit 6: The best bed! - Lesson 3", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Draw and label", "Identify irregular adjectives"],
            [4, "Fluency Time 2: Making phone calls", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Interview a classmate", "Make a phone call role-play"],
            [5, "Project: A telephone", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Write a short paragraph", "Participate in telephone project"],
            [6, "Review 2", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Matching activity", "Review comparatives & superlatives"],
            [7, "Unit 7: Will it really happen? - Lesson 1", "space, future, prediction, rocket, planet", "People will travel in super-fast planes, Will they go back to Australia?", "Role-play", "Predict the future using will"],
            [8, "Unit 7: Will it really happen? - Lesson 2", "space, future, prediction, rocket, planet", "People will travel in super-fast planes, Will they go back to Australia?", "Listening practice", "Talk about life in space"],
            [9, "Unit 7: Will it really happen? - Lesson 3", "space, future, prediction, rocket, planet", "People will travel in super-fast planes, Will they go back to Australia?", "Project preparation", "Make simple predictions"],
            [10, "Unit 8: How much time have we got? - Lesson 1", "money, ticket, holiday, newspaper, bag", "How much money have you got?, Have you got any newspapers?", "Flashcard practice", "Use quantity expressions"],
            [11, "Unit 8: How much time have we got? - Lesson 2", "money, ticket, holiday, newspaper, bag", "How much money have you got?, Have you got any newspapers?", "Mini-presentation", "Ask questions with how much/many"],
            [12, "Unit 8: How much time have we got? - Lesson 3", "money, ticket, holiday, newspaper, bag", "How much money have you got?, Have you got any newspapers?", "Grammar drills", "Talk about holidays"],
            [13, "Mid-term Test", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Mid-term revision", "Mid-term Test"],
            [14, "Unit 9: Something new to watch! - Lesson 1", "TV, show, watch, programme, news", "I turned on the TV to watch sports, We went in the boat to see dolphins", "Storytelling", "Describe TV shows"],
            [15, "Unit 9: Something new to watch! - Lesson 2", "TV, show, watch, programme, news", "I turned on the TV to watch sports, We went in the boat to see dolphins", "Creative writing", "Use infinitive of purpose"],
            [16, "Unit 9: Something new to watch! - Lesson 3", "TV, show, watch, programme, news", "I turned on the TV to watch sports, We went in the boat to see dolphins", "Worksheet practice", "Talk about how often activities happen"],
            [17, "Fluency Time 3: Choosing TV programmes", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Pair work dialogue", "Choose TV programmes and give opinions"],
            [18, "Project: My own TV", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Speaking practice", "Participate in project: My own TV"],
            [19, "Review 3", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Homework quiz", "Review vocabulary about media"],
            [20, "Unit 10: I’ve printed my homework - Lesson 1", "computer, homework, print, screen, book", "He’s put the books on the shelves, Have you seen my new speakers?", "Research task", "Talk about computers"],
            [21, "Unit 10: I’ve printed my homework - Lesson 2", "computer, homework, print, screen, book", "He’s put the books on the shelves, Have you seen my new speakers?", "Project design", "Use present perfect affirmative"],
            [22, "Unit 10: I’ve printed my homework - Lesson 3", "computer, homework, print, screen, book", "He’s put the books on the shelves, Have you seen my new speakers?", "Oral presentation", "Ask and answer present perfect questions"],
            [23, "Consolidation & sharing", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Consolidation & review", "Consolidation project work"],
            [24, "Final Test", "bed, comfortable, better, worse, best", "My bed is more comfortable than this one, Better / worse than, The best / the worst", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik11 as $lesson) {
            $ik11->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 12
    |--------------------------------------------------------------------------
    */
        $ik12 = Subject::where('name', 'ICY Kids 12')->first();

        $lessons_ik12 = [
            [1, "Unit 11: Have you ever been …? - Lesson 1", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Workbook exercises", "Talk about expeditions and places"],
            [2, "Unit 11: Have you ever been …? - Lesson 2", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Make sentences with new vocab", "Use present perfect to talk about experiences"],
            [3, "Unit 11: Have you ever been …? - Lesson 3", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Draw and label", "Use never/ever in sentences"],
            [4, "Unit 12: What’s the matter? - Lesson 1", "ill, hospital, doctor, medicine, healthy", "You should drink some water, You shouldn’t eat lots of cakes, He could eat fish but he couldn’t eat nuts", "Interview a classmate", "Talk about health problems"],
            [5, "Unit 12: What’s the matter? - Lesson 2", "ill, hospital, doctor, medicine, healthy", "You should drink some water, You shouldn’t eat lots of cakes, He could eat fish but he couldn’t eat nuts", "Write a short paragraph", "Give advice using should/shouldn’t"],
            [6, "Unit 12: What’s the matter? - Lesson 3", "ill, hospital, doctor, medicine, healthy", "You should drink some water, You shouldn’t eat lots of cakes, He could eat fish but he couldn’t eat nuts", "Matching activity", "Talk about abilities using could/couldn’t"],
            [7, "Fluency Time 4: Describing accidents", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Role-play", "Describe accidents"],
            [8, "Project: A room cube", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Listening practice", "Use past tense for describing events"],
            [9, "Review 4", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Project preparation", "Participate in project: Room cube"],
            [10, "Unit 13: Can you help me? - Lesson 1", "help, friend, hero, travel, pupil", "This is the boy who didn’t put the lid on, She is the girl that …", "Flashcard practice", "Use object pronouns in sentences"],
            [11, "Unit 13: Can you help me? - Lesson 2", "help, friend, hero, travel, pupil", "This is the boy who didn’t put the lid on, She is the girl that …", "Mini-presentation", "Use relative pronouns correctly"],
            [12, "Unit 13: Can you help me? - Lesson 3", "help, friend, hero, travel, pupil", "This is the boy who didn’t put the lid on, She is the girl that …", "Grammar drills", "Write about helping others"],
            [13, "Mid-term Test", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Mid-term revision", "Mid-term Test"],
            [14, "Unit 14: We were fishing - Lesson 1", "fishing, river, family, memory, grandfather", "What were you doing?, I was looking at photos, He was born in 1971", "Storytelling", "Talk about past events with past continuous"],
            [15, "Unit 14: We were fishing - Lesson 2", "fishing, river, family, memory, grandfather", "What were you doing?, I was looking at photos, He was born in 1971", "Creative writing", "Use dates in sentences"],
            [16, "Unit 14: We were fishing - Lesson 3", "fishing, river, family, memory, grandfather", "What were you doing?, I was looking at photos, He was born in 1971", "Worksheet practice", "Describe family memories"],
            [17, "Unit 15: Good news, bad news - Lesson 1", "job, news, wish, dream, work", "There is some good news, When I was working, the phone rang, They’re / Their / There", "Pair work dialogue", "Talk about jobs and wishes"],
            [18, "Unit 15: Good news, bad news - Lesson 2", "job, news, wish, dream, work", "There is some good news, When I was working, the phone rang, They’re / Their / There", "Speaking practice", "Use past continuous with past simple"],
            [19, "Unit 15: Good news, bad news - Lesson 3", "job, news, wish, dream, work", "There is some good news, When I was working, the phone rang, They’re / Their / There", "Homework quiz", "Differentiate grammar homophones"],
            [20, "Fluency Time 5: In the playground", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Research task", "Talk about playground activities"],
            [21, "Project: A mini book", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Project design", "Make a mini-book project"],
            [22, "Review 5", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Oral presentation", "Review and consolidate lessons"],
            [23, "Consolidation & sharing", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Consolidation & review", "Prepare for final project sharing"],
            [24, "Final Test", "mountain, sea, forest, desert, expedition", "Have you ever been to space?, Yes, I have / No, I haven’t, We’ve never fallen in the mountains", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik12 as $lesson) {
            $ik12->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 13
    |--------------------------------------------------------------------------
    */
        $ik13 = Subject::where('name', 'ICY Kids 13')->first();

        $lessons_ik13 = [
            [1, "Unit 1: You can build it! - Lesson 1", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Workbook exercises", "Introduce tools vocabulary"],
            [2, "Unit 1: You can build it! - Lesson 2", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Make sentences with new vocab", "Use present perfect ever/never"],
            [3, "Unit 1: You can build it! - Lesson 3", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Draw and label", "Ask and answer about making things"],
            [4, "Review Unit 1", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Unit 1 Review exercises", "Review Unit 1 content"],
            [5, "Unit 2: It’s show time! - Lesson 1", "play, script, actor, stage, costume", "It was great!, I’ve already built the set, I haven’t learnt the script yet", "Interview a classmate", "Talk about plays and performances"],
            [6, "Unit 2: It’s show time! - Lesson 2", "play, script, actor, stage, costume", "It was great!, I’ve already built the set, I haven’t learnt the script yet", "Write a short paragraph", "Use past simple in context"],
            [7, "Unit 2: It’s show time! - Lesson 3", "play, script, actor, stage, costume", "It was great!, I’ve already built the set, I haven’t learnt the script yet", "Matching activity", "Contrast past simple and present perfect"],
            [8, "Review Unit 2", "play, script, actor, stage, costume", "It was great!, I’ve already built the set, I haven’t learnt the script yet", "Unit 2 Review exercises", "Review Unit 2 content"],
            [9, "Unit 3: The best party ever! - Lesson 1", "party, carnival, costume, festival, fun", "It’s as colourful as the carnival in Rio, It’s not as big as …, Too/enough", "Role-play", "Talk about carnivals"],
            [10, "Unit 3: The best party ever! - Lesson 2", "party, carnival, costume, festival, fun", "It’s as colourful as the carnival in Rio, It’s not as big as …, Too/enough", "Listening practice", "Use comparatives in sentences"],
            [11, "Unit 3: The best party ever! - Lesson 3", "party, carnival, costume, festival, fun", "It’s as colourful as the carnival in Rio, It’s not as big as …, Too/enough", "Grammar drills", "Use superlatives and too/enough"],
            [12, "Review Unit 3", "party, carnival, costume, festival, fun", "It’s as colourful as the carnival in Rio, It’s not as big as …, Too/enough", "Unit 3 Review exercises", "Review Unit 3 content"],
            [13, "Mid-term Test", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Mid-term Test", "Mid-term Test"],
            [14, "Unit 4: Our planet - Lesson 1", "planet, litter, environment, children, home", "Some children were playing when we arrived, There used to be lots of litter here", "Creative writing", "Describe the environment"],
            [15, "Unit 4: Our planet - Lesson 2", "planet, litter, environment, children, home", "Some children were playing when we arrived, There used to be lots of litter here", "Worksheet practice", "Use past continuous to describe events"],
            [16, "Unit 4: Our planet - Lesson 3", "planet, litter, environment, children, home", "Some children were playing when we arrived, There used to be lots of litter here", "Pair work dialogue", "Use used to in sentences"],
            [17, "Review Unit 4", "planet, litter, environment, children, home", "Some children were playing when we arrived, There used to be lots of litter here", "Unit 4 Review exercises", "Review Unit 4 content"],
            [18, "Project: Recycling poster", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Speaking practice", "Enhance speaking skills"],
            [19, "Speaking project presentation", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Homework quiz", "Do homework quiz for consolidation"],
            [20, "Homework quiz", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Research task", "Conduct a research task"],
            [21, "Research activity", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Project design", "Prepare project design"],
            [22, "Oral project presentation", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Oral presentation", "Do oral presentation"],
            [23, "Consolidation & sharing", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Consolidation & review", "Consolidate vocabulary and grammar"],
            [24, "Final Test", "tools, wood, build, table, kitchen", "Have you ever cleaned a kitchen?, I’ve never made a cake", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik13 as $lesson) {
            $ik13->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 14
    |--------------------------------------------------------------------------
    */

        $ik14 = Subject::where('name', 'ICY Kids 14')->first();

        $lessons_ik14 = [
            [1, "Unit 5: Reuse and recycle - Lesson 1", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Workbook exercises", "Talk about recycling"],
            [2, "Unit 5: Reuse and recycle - Lesson 2", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Make sentences with new vocab", "Use will/won’t for predictions"],
            [3, "Unit 5: Reuse and recycle - Lesson 3", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Draw and label", "Make suggestions using new vocabulary"],
            [4, "Review Unit 5", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Review Unit 5 exercises", "Review Unit 5 content"],
            [5, "Unit 6: Crazy about wildlife! - Lesson 1", "gorilla, lion, tiger, zoo, wildlife", "I’m going to adopt a tiger, It’s going to fall", "Interview a classmate", "Talk about animals in the wild"],
            [6, "Unit 6: Crazy about wildlife! - Lesson 2", "gorilla, lion, tiger, zoo, wildlife", "I’m going to adopt a tiger, It’s going to fall", "Write a short paragraph", "Use going to for future plans"],
            [7, "Unit 6: Crazy about wildlife! - Lesson 3", "gorilla, lion, tiger, zoo, wildlife", "I’m going to adopt a tiger, It’s going to fall", "Matching activity", "Make predictions about wildlife"],
            [8, "Review Unit 6", "gorilla, lion, tiger, zoo, wildlife", "I’m going to adopt a tiger, It’s going to fall", "Review Unit 6 exercises", "Review Unit 6 content"],
            [9, "Unit 7: Call an ambulance! - Lesson 1", "ambulance, bandage, doctor, firefighter, report", "He said he needed some bandages, She said a doctor was coming tomorrow", "Role-play", "Talk about first aid situations"],
            [10, "Unit 7: Call an ambulance! - Lesson 2", "ambulance, bandage, doctor, firefighter, report", "He said he needed some bandages, She said a doctor was coming tomorrow", "Listening practice", "Report speech in past tense"],
            [11, "Unit 7: Call an ambulance! - Lesson 3", "ambulance, bandage, doctor, firefighter, report", "He said he needed some bandages, She said a doctor was coming tomorrow", "Grammar drills", "Role-play emergency services"],
            [12, "Review Unit 7", "ambulance, bandage, doctor, firefighter, report", "He said he needed some bandages, She said a doctor was coming tomorrow", "Review Unit 7 exercises", "Review Unit 7 content"],
            [13, "Mid-term Test", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Mid-term Test", "Mid-term Test"],
            [14, "Unit 8: Let’s eat healthily - Lesson 1", "fruit, vegetables, pizza, diet, healthy", "If I press this button, the machine will make a pizza, Will I get ill if …?", "Creative writing", "Describe food and diets"],
            [15, "Unit 8: Let’s eat healthily - Lesson 2", "fruit, vegetables, pizza, diet, healthy", "If I press this button, the machine will make a pizza, Will I get ill if …?", "Worksheet practice", "Use first conditional for health"],
            [16, "Unit 8: Let’s eat healthily - Lesson 3", "fruit, vegetables, pizza, diet, healthy", "If I press this button, the machine will make a pizza, Will I get ill if …?", "Pair work dialogue", "Ask and answer conditional questions"],
            [17, "Review Unit 8", "fruit, vegetables, pizza, diet, healthy", "If I press this button, the machine will make a pizza, Will I get ill if …?", "Review Unit 8 exercises", "Review Unit 8 content"],
            [18, "Project: Healthy lifestyle poster", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Speaking practice", "Enhance speaking skills"],
            [19, "Speaking project presentation", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Homework quiz", "Do homework quiz for consolidation"],
            [20, "Homework quiz", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Research task", "Conduct a research task"],
            [21, "Research activity", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Project design", "Prepare project design"],
            [22, "Oral project presentation", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Oral presentation", "Do oral presentation"],
            [23, "Consolidation & sharing", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Consolidation & review", "Consolidate vocabulary and grammar"],
            [24, "Final Test", "recycle, reuse, leaflet, suggestion, mistake", "Chip will know how to do everything, We’re leaving at two o’clock", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik14 as $lesson) {
            $ik14->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 15
    |--------------------------------------------------------------------------
    */

        $ik15 = Subject::where('name', 'ICY Kids 15')->first();
        $lessons_ik15 = [
            [1, "Unit 9: The big match - Lesson 1", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Workbook exercises", "Talk about sport and matches"],
            [2, "Unit 9: The big match - Lesson 2", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Make sentences with new vocab", "Use modal verbs for possibility"],
            [3, "Unit 9: The big match - Lesson 3", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Draw and label", "Describe exercise habits"],
            [4, "Review Unit 9", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Review Unit 9 exercises", "Review Unit 9 content"],
            [5, "Unit 10: Ancient buildings - Lesson 1", "building, ancient, necklace, museum, invention", "There are machines everywhere, These necklaces are beautiful, aren’t they?", "Interview a classmate", "Describe ancient buildings"],
            [6, "Unit 10: Ancient buildings - Lesson 2", "building, ancient, necklace, museum, invention", "There are machines everywhere, These necklaces are beautiful, aren’t they?", "Write a short paragraph", "Use indefinite pronouns"],
            [7, "Unit 10: Ancient buildings - Lesson 3", "building, ancient, necklace, museum, invention", "There are machines everywhere, These necklaces are beautiful, aren’t they?", "Matching activity", "Use question tags in sentences"],
            [8, "Review Unit 10", "building, ancient, necklace, museum, invention", "There are machines everywhere, These necklaces are beautiful, aren’t they?", "Review Unit 10 exercises", "Review Unit 10 content"],
            [9, "Unit 11: A message for the future - Lesson 1", "capsule, future, message, film, review", "English is spoken in many countries, Visitors are greeted by people in costumes", "Role-play", "Talk about time capsules"],
            [10, "Unit 11: A message for the future - Lesson 2", "capsule, future, message, film, review", "English is spoken in many countries, Visitors are greeted by people in costumes", "Listening practice", "Use passive voice in present simple"],
            [11, "Unit 11: A message for the future - Lesson 3", "capsule, future, message, film, review", "English is spoken in many countries, Visitors are greeted by people in costumes", "Grammar drills", "Write about film reviews"],
            [12, "Review Unit 11", "capsule, future, message, film, review", "English is spoken in many countries, Visitors are greeted by people in costumes", "Review Unit 11 exercises", "Review Unit 11 content"],
            [13, "Mid-term Test", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Mid-term Test", "Mid-term Test"],
            [14, "Unit 12: Be a part of history! - Lesson 1", "news, salary, telephone, cook, clean", "You were invented to cook and clean, Who was the telephone invented by?", "Creative writing", "Talk about news"],
            [15, "Unit 12: Be a part of history! - Lesson 2", "news, salary, telephone, cook, clean", "You were invented to cook and clean, Who was the telephone invented by?", "Worksheet practice", "Use passive voice in past simple"],
            [16, "Unit 12: Be a part of history! - Lesson 3", "news, salary, telephone, cook, clean", "You were invented to cook and clean, Who was the telephone invented by?", "Pair work dialogue", "Identify passive constructions"],
            [17, "Review Unit 12", "news, salary, telephone, cook, clean", "You were invented to cook and clean, Who was the telephone invented by?", "Review Unit 12 exercises", "Review Unit 12 content"],
            [18, "Project: Future message poster", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Speaking practice", "Enhance speaking skills"],
            [19, "Speaking project presentation", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Homework quiz", "Do homework quiz for consolidation"],
            [20, "Homework quiz", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Research task", "Conduct a research task"],
            [21, "Research activity", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Project design", "Prepare project design"],
            [22, "Oral project presentation", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Oral presentation", "Do oral presentation"],
            [23, "Consolidation & sharing", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Consolidation & review", "Consolidate vocabulary and grammar"],
            [24, "Final Test", "match, exercise, sport, boots, team", "I might need to do more work, Do you have to exercise every day?", "Final Test", "Final Test"],
        ];

        foreach ($lessons_ik15 as $lesson) {
            $ik15->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 1 ==========
        $teen1 = Subject::where('name', 'ICY Teen 1')->first();
        $lessons_teen1 = [
            [1, "Unit 1: My New School – Lesson 1: Reading about schools", "School things, activities, Verbs: play, do, have, study, Sounds: /ə/ and /ʌ/", "Present simple, Adverbs of frequency", "Workbook exercises + short writing task on Reading about schools", "Students can reading about schools using target vocab & grammar"],
            [2, "Unit 1: My New School – Lesson 2: Talking about schools", "School things, activities, Verbs: play, do, have, study, Sounds: /ə/ and /ʌ/", "Present simple, Adverbs of frequency", "Workbook exercises + short writing task on Talking about schools", "Students can talking about schools using target vocab & grammar"],
            [3, "Unit 1: My New School – Lesson 3: Writing a paragraph about one's school", "School things, activities, Verbs: play, do, have, study, Sounds: /ə/ and /ʌ/", "Present simple, Adverbs of frequency", "Workbook exercises + short writing task on Writing a paragraph about one's school", "Students can writing about one's school using target vocab & grammar"],
            [4, "Unit 2: My House – Lesson 1: Reading about rooms and furniture", "Types of houses, Rooms and furniture, Final sounds: /s/ and /z/", "Possessive case, Prepositions of place", "Workbook exercises + short writing task on Reading about rooms and furniture", "Students can reading about rooms and furniture using target vocab & grammar"],
            [5, "Unit 2: My House – Lesson 2: Describing houses and furniture", "Types of houses, Rooms and furniture, Final sounds: /s/ and /z/", "Possessive case, Prepositions of place", "Workbook exercises + short writing task on Describing houses and furniture", "Students can describing houses and furniture using target vocab & grammar"],
            [6, "Unit 2: My House – Lesson 3: Writing an email about a house", "Types of houses, Rooms and furniture, Final sounds: /s/ and /z/", "Possessive case, Prepositions of place", "Workbook exercises + short writing task on Writing an email about a house", "Students can writing an email about a house using target vocab & grammar"],
            [7, "Unit 3: My Friends – Lesson 1: Reading about friends", "Body parts, appearance, Personality adjectives, Sounds: /b/ and /p/", "Present continuous", "Workbook exercises + short writing task on Reading about friends", "Students can reading about friends using target vocab & grammar"],
            [8, "Unit 3: My Friends – Lesson 2: Talking about friends and camps", "Body parts, appearance, Personality adjectives, Sounds: /b/ and /p/", "Present continuous", "Workbook exercises + short writing task on Talking about friends and camps", "Students can talking about friends and camps using target vocab & grammar"],
            [9, "Unit 3: My Friends – Lesson 3: Writing a diary about best friends", "Body parts, appearance, Personality adjectives, Sounds: /b/ and /p/", "Present continuous", "Workbook exercises + short writing task on Writing a diary about best friends", "Students can writing about best friends using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review all vocabulary from Units 1–3", "Review grammar from Units 1–3", "Group quiz + mini project presentation", "Students consolidate knowledge of Units 1–3"],
            [11, "Unit 4: My Neighbourhood – Lesson 1: Reading about a neighbourhood", "Places in a neighbourhood, Pronunciation: /iə/ and /i:/", "Comparative adjectives", "Workbook exercises + short writing task on Reading about a neighbourhood", "Students can reading about a neighbourhood using target vocab & grammar"],
            [12, "Unit 4: My Neighbourhood – Lesson 2: Talking about neighbourhood", "Places in a neighbourhood, Pronunciation: /iə/ and /i:/", "Comparative adjectives", "Workbook exercises + short writing task on Talking about neighbourhood", "Students can talking about neighbourhood using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: My Neighbourhood – Lesson 3: Writing a paragraph about neighbourhood", "Places in a neighbourhood, Pronunciation: /iə/ and /i:/", "Comparative adjectives", "Workbook exercises + short writing task on Writing a paragraph about neighbourhood", "Students can writing about neighbourhood using target vocab & grammar"],
            [15, "Unit 5: Natural Wonders of Viet Nam – Lesson 1: Reading about natural wonders", "Things in nature, Travel items, Sounds: /t/ and /d/", "Countable/uncountable nouns, Modal verb: must/mustn't", "Workbook exercises + short writing task on Reading about natural wonders", "Students can reading about natural wonders using target vocab & grammar"],
            [16, "Unit 5: Natural Wonders of Viet Nam – Lesson 2: Talking about famous places", "Things in nature, Travel items, Sounds: /t/ and /d/", "Countable/uncountable nouns, Modal verb: must/mustn't", "Workbook exercises + short writing task on Talking about famous places", "Students can talking about famous places using target vocab & grammar"],
            [17, "Unit 5: Natural Wonders of Viet Nam – Lesson 3: Writing a paragraph about a natural wonder", "Things in nature, Travel items, Sounds: /t/ and /d/", "Countable/uncountable nouns, Modal verb: must/mustn't", "Workbook exercises + short writing task on Writing a paragraph about a natural wonder", "Students can writing about a natural wonder using target vocab & grammar"],
            [18, "Unit 6: Our Tet Holiday – Lesson 1: Reading about Tet practices", "Tet activities, Pronunciation: /s/ and /ʃ/", "Should/shouldn't for advice, Some/any", "Workbook exercises + short writing task on Reading about Tet practices", "Students can reading about tet practices using target vocab & grammar"],
            [19, "Unit 6: Our Tet Holiday – Lesson 2: Talking about Tet activities", "Tet activities, Pronunciation: /s/ and /ʃ/", "Should/shouldn't for advice, Some/any", "Workbook exercises + short writing task on Talking about Tet activities", "Students can talking about tet activities using target vocab & grammar"],
            [20, "Unit 6: Our Tet Holiday – Lesson 3: Writing an email about Tet", "Tet activities, Pronunciation: /s/ and /ʃ/", "Should/shouldn't for advice, Some/any", "Workbook exercises + short writing task on Writing an email about Tet", "Students can writing an email about tet using target vocab & grammar"],
            [21, "Project-based Learning: English Culture & Daily Life", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a short project", "Students apply knowledge creatively in real-life tasks"],
            [22, "Project-based Learning: English Culture & Daily Life", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a short project", "Students apply knowledge creatively in real-life tasks"],
            [23, "Review 2 (Units 4–6)", "Review all vocabulary from Units 4–6", "Review grammar from Units 4–6", "Group quiz + project poster", "Students consolidate knowledge of Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];
        foreach ($lessons_teen1 as $lesson) {
            $teen1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 2 ==========
        $teen2 = Subject::where('name', 'ICY Teen 2')->first();
        $lessons_teen2 = [
            [1, "Unit 7: Television – Lesson 1: Reading about TV guide", "TV programmes, Sounds: /θ/ and /ð/", "Wh-questions, Conjunctions: and, but, so", "Workbook exercises + speaking/writing on Reading about TV guide", "Students can reading about tv guide using target vocab & grammar"],
            [2, "Unit 7: Television – Lesson 2: Talking about TV programmes", "TV programmes, Sounds: /θ/ and /ð/", "Wh-questions, Conjunctions: and, but, so", "Workbook exercises + speaking/writing on Talking about TV programmes", "Students can talking about tv programmes using target vocab & grammar"],
            [3, "Unit 7: Television – Lesson 3: Writing about TV-viewing habits", "TV programmes, Sounds: /θ/ and /ð/", "Wh-questions, Conjunctions: and, but, so", "Workbook exercises + speaking/writing on Writing about TV-viewing habits", "Students can writing about tv-viewing habits using target vocab & grammar"],
            [4, "Unit 8: Sports and Games – Lesson 1: Reading about sports stars", "Sports and games, Sounds: /e/ and /æ/", "Past simple, Imperatives", "Workbook exercises + speaking/writing on Reading about sports stars", "Students can reading about sports stars using target vocab & grammar"],
            [5, "Unit 8: Sports and Games – Lesson 2: Talking about sportspeople", "Sports and games, Sounds: /e/ and /æ/", "Past simple, Imperatives", "Workbook exercises + speaking/writing on Talking about sportspeople", "Students can talking about sportspeople using target vocab & grammar"],
            [6, "Unit 8: Sports and Games – Lesson 3: Writing about a sport/game", "Sports and games, Sounds: /e/ and /æ/", "Past simple, Imperatives", "Workbook exercises + speaking/writing on Writing about a sport/game", "Students can writing about a sport/game using target vocab & grammar"],
            [7, "Unit 9: Cities of the World – Lesson 1: Reading about holiday postcard", "Cities and landmarks, Sounds: /əʊ/ and /aʊ/", "Possessive adjectives, Possessive pronouns", "Workbook exercises + speaking/writing on Reading about holiday postcard", "Students can reading about holiday postcard using target vocab & grammar"],
            [8, "Unit 9: Cities of the World – Lesson 2: Talking about a city", "Cities and landmarks, Sounds: /əʊ/ and /aʊ/", "Possessive adjectives, Possessive pronouns", "Workbook exercises + speaking/writing on Talking about a city", "Students can talking about a city using target vocab & grammar"],
            [9, "Unit 9: Cities of the World – Lesson 3: Writing a holiday postcard", "Cities and landmarks, Sounds: /əʊ/ and /aʊ/", "Possessive adjectives, Possessive pronouns", "Workbook exercises + speaking/writing on Writing a holiday postcard", "Students can writing about a holiday postcard using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Group quiz + discussion project", "Students consolidate Units 7–9"],
            [11, "Unit 10: Our Houses in the Future – Lesson 1: Reading about future houses", "Types of houses and appliances, Stress in two-syllable words", "Future simple, Might for possibility", "Workbook exercises + speaking/writing on Reading about future houses", "Students can reading about future houses using target vocab & grammar"],
            [12, "Unit 10: Our Houses in the Future – Lesson 2: Talking about future houses", "Types of houses and appliances, Stress in two-syllable words", "Future simple, Might for possibility", "Workbook exercises + speaking/writing on Talking about future houses", "Students can talking about future houses using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Our Houses in the Future – Lesson 3: Writing about a dream house", "Types of houses and appliances, Stress in two-syllable words", "Future simple, Might for possibility", "Workbook exercises + speaking/writing on Writing about a dream house", "Students can writing about a dream house using target vocab & grammar"],
            [15, "Unit 11: Our Greener World – Lesson 1: Reading about going green", "Things reused/recycled, Rhythm in sentences", "Articles, First conditional", "Workbook exercises + speaking/writing on Reading about going green", "Students can reading about going green using target vocab & grammar"],
            [16, "Unit 11: Our Greener World – Lesson 2: Talking about green tips", "Things reused/recycled, Rhythm in sentences", "Articles, First conditional", "Workbook exercises + speaking/writing on Talking about green tips", "Students can talking about green tips using target vocab & grammar"],
            [17, "Unit 11: Our Greener World – Lesson 3: Writing about a green club", "Things reused/recycled, Rhythm in sentences", "Articles, First conditional", "Workbook exercises + speaking/writing on Writing about a green club", "Students can writing about a green club using target vocab & grammar"],
            [18, "Unit 12: Robots – Lesson 1: Reading about robots", "Daily activities, Tones in statements", "Superlative adjectives (short)", "Workbook exercises + speaking/writing on Reading about robots", "Students can reading about robots using target vocab & grammar"],
            [19, "Unit 12: Robots – Lesson 2: Talking about robots", "Daily activities, Tones in statements", "Superlative adjectives (short)", "Workbook exercises + speaking/writing on Talking about robots", "Students can talking about robots using target vocab & grammar"],
            [20, "Unit 12: Robots – Lesson 3: Writing about a robot", "Daily activities, Tones in statements", "Superlative adjectives (short)", "Workbook exercises + speaking/writing on Writing about a robot", "Students can writing about a robot using target vocab & grammar"],
            [21, "Project-based Learning: My Future World", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: My Future World", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: future world poster", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];
        foreach ($lessons_teen2 as $lesson) {
            $teen2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 3 ==========
        $teen3 = Subject::where('name', 'ICY Teen 3')->first();

        $lessons_teen3 = [
            [1, "Unit 1: Hobbies – Lesson 1: Reading about hobbies", "Hobbies, Verbs of liking/disliking, Sounds: /ə/ and /з:/", "Present simple", "Workbook tasks + speaking/writing on Reading about hobbies", "Students can reading about hobbies using target vocab & grammar"],
            [2, "Unit 1: Hobbies – Lesson 2: Talking about hobbies", "Hobbies, Verbs of liking/disliking, Sounds: /ə/ and /з:/", "Present simple", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [3, "Unit 1: Hobbies – Lesson 3: Writing about a hobby", "Hobbies, Verbs of liking/disliking, Sounds: /ə/ and /з:/", "Present simple", "Workbook tasks + speaking/writing on Writing about a hobby", "Students can writing about a hobby using target vocab & grammar"],
            [4, "Unit 2: Healthy Living – Lesson 1: Reading about health problems", "Healthy activities, Health problems, Sounds: /f/ and /v/", "Simple sentences", "Workbook tasks + speaking/writing on Reading about health problems", "Students can reading about health problems using target vocab & grammar"],
            [5, "Unit 2: Healthy Living – Lesson 2: Talking about health tips", "Healthy activities, Health problems, Sounds: /f/ and /v/", "Simple sentences", "Workbook tasks + speaking/writing on Talking about health tips", "Students can talking about health tips using target vocab & grammar"],
            [6, "Unit 2: Healthy Living – Lesson 3: Writing advice to avoid illness", "Healthy activities, Health problems, Sounds: /f/ and /v/", "Simple sentences", "Workbook tasks + speaking/writing on Writing advice to avoid illness", "Students can writing advice to avoid illness using target vocab & grammar"],
            [7, "Unit 3: Community Service – Lesson 1: Reading about community activities", "Community activities, Pronunciation: /t/, /d/, /id/", "Past simple", "Workbook tasks + speaking/writing on Reading about community activities", "Students can reading about community activities using target vocab & grammar"],
            [8, "Unit 3: Community Service – Lesson 2: Talking about community service", "Community activities, Pronunciation: /t/, /d/, /id/", "Past simple", "Workbook tasks + speaking/writing on Talking about community service", "Students can talking about community service using target vocab & grammar"],
            [9, "Unit 3: Community Service – Lesson 3: Writing an email about community activities", "Community activities, Pronunciation: /t/, /d/, /id/", "Past simple", "Workbook tasks + speaking/writing on Writing an email about community activities", "Students can writing an email about community activities using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review vocabulary Units 1–3", "Review grammar Units 1–3", "Quiz + poster project", "Students consolidate Units 1–3"],
            [11, "Unit 4: Music and Arts – Lesson 1: Reading about traditional art", "Music and arts, Sounds: /ʃ/ and /ʒ/", "Comparisons: like, different from, (not) as … as", "Workbook tasks + speaking/writing on Reading about traditional art", "Students can reading about traditional art using target vocab & grammar"],
            [12, "Unit 4: Music and Arts – Lesson 2: Talking about a musical performance", "Music and arts, Sounds: /ʃ/ and /ʒ/", "Comparisons: like, different from, (not) as … as", "Workbook tasks + speaking/writing on Talking about a musical performance", "Students can talking about a musical performance using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: Music and Arts – Lesson 3: Writing an informal invitation", "Music and arts, Sounds: /ʃ/ and /ʒ/", "Comparisons: like, different from, (not) as … as", "Workbook tasks + speaking/writing on Writing an informal invitation", "Students can writing an informal invitation using target vocab & grammar"],
            [15, "Unit 5: Food and Drink – Lesson 1: Reading about traditional food", "Food and drink, Sounds: /b/ and /p/", "Some, a lot of, lots of", "Workbook tasks + speaking/writing on Reading about traditional food", "Students can reading about traditional food using target vocab & grammar"],
            [16, "Unit 5: Food and Drink – Lesson 2: Talking about food/drink", "Food and drink, Sounds: /b/ and /p/", "Some, a lot of, lots of", "Workbook tasks + speaking/writing on Talking about food/drink", "Students can talking about food/drink using target vocab & grammar"],
            [17, "Unit 5: Food and Drink – Lesson 3: Writing about eating habits", "Food and drink, Sounds: /b/ and /p/", "Some, a lot of, lots of", "Workbook tasks + speaking/writing on Writing about eating habits", "Students can writing about eating habits using target vocab & grammar"],
            [18, "Unit 6: A Visit to a School – Lesson 1: Reading about a famous school", "Schools, facilities, Sounds: /tʃ/ and /dʒ/", "Prepositions of time and place", "Workbook tasks + speaking/writing on Reading about a famous school", "Students can reading about a famous school using target vocab & grammar"],
            [19, "Unit 6: A Visit to a School – Lesson 2: Talking about schools", "Schools, facilities, Sounds: /tʃ/ and /dʒ/", "Prepositions of time and place", "Workbook tasks + speaking/writing on Talking about schools", "Students can talking about schools using target vocab & grammar"],
            [20, "Unit 6: A Visit to a School – Lesson 3: Writing about school activities", "Schools, facilities, Sounds: /tʃ/ and /dʒ/", "Prepositions of time and place", "Workbook tasks + speaking/writing on Writing about school activities", "Students can writing about school activities using target vocab & grammar"],
            [21, "Project-based Learning: Healthy Lifestyle Campaign", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Healthy Lifestyle Campaign", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 2 (Units 4–6)", "Review vocabulary Units 4–6", "Review grammar Units 4–6", "Mini project: school magazine", "Students consolidate Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];

        foreach ($lessons_teen3 as $lesson) {
            $teen3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
        // ========== ICY TEEN 4 ==========
        $teen4 = Subject::where('name', 'ICY Teen 4')->first();

        $lessons_teen4 = [
            [1, "Unit 7: Traffic – Lesson 1: Reading about traffic rules", "Means of transport, Road signs, Sounds: /aɪ/ and /eɪ/", "It indicating distance, Should/shouldn’t", "Workbook tasks + speaking/writing on Reading about traffic rules", "Students can reading about traffic rules using target vocab & grammar"],
            [2, "Unit 7: Traffic – Lesson 2: Talking about traffic problems", "Means of transport, Road signs, Sounds: /aɪ/ and /eɪ/", "It indicating distance, Should/shouldn’t", "Workbook tasks + speaking/writing on Talking about traffic problems", "Students can talking about traffic problems using target vocab & grammar"],
            [3, "Unit 7: Traffic – Lesson 3: Writing about traffic issues", "Means of transport, Road signs, Sounds: /aɪ/ and /eɪ/", "It indicating distance, Should/shouldn’t", "Workbook tasks + speaking/writing on Writing about traffic issues", "Students can writing about traffic issues using target vocab & grammar"],
            [4, "Unit 8: Films – Lesson 1: Reading about films", "Types of films, Adjectives describing films, Sounds: /iə/ and /eə/", "Connectors: although/though/however", "Workbook tasks + speaking/writing on Reading about films", "Students can reading about films using target vocab & grammar"],
            [5, "Unit 8: Films – Lesson 2: Talking about films", "Types of films, Adjectives describing films, Sounds: /iə/ and /eə/", "Connectors: although/though/however", "Workbook tasks + speaking/writing on Talking about films", "Students can talking about films using target vocab & grammar"],
            [6, "Unit 8: Films – Lesson 3: Writing about a film", "Types of films, Adjectives describing films, Sounds: /iə/ and /eə/", "Connectors: although/though/however", "Workbook tasks + speaking/writing on Writing about a film", "Students can writing about a film using target vocab & grammar"],
            [7, "Unit 9: Festivals Around the World – Lesson 1: Reading about festivals", "Types of festivals, Festival activities, Stress in two-syllable words", "Yes/No questions", "Workbook tasks + speaking/writing on Reading about festivals", "Students can reading about festivals using target vocab & grammar"],
            [8, "Unit 9: Festivals Around the World – Lesson 2: Talking about a festival", "Types of festivals, Festival activities, Stress in two-syllable words", "Yes/No questions", "Workbook tasks + speaking/writing on Talking about a festival", "Students can talking about a festival using target vocab & grammar"],
            [9, "Unit 9: Festivals Around the World – Lesson 3: Writing about festivals", "Types of festivals, Festival activities, Stress in two-syllable words", "Yes/No questions", "Workbook tasks + speaking/writing on Writing about festivals", "Students can writing about festivals using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Quiz + roleplay project", "Students consolidate Units 7–9"],
            [11, "Unit 10: Energy Sources – Lesson 1: Reading about energy sources", "Types of energy sources, Pronunciation: stress in three-syllable words", "Present continuous", "Workbook tasks + speaking/writing on Reading about energy sources", "Students can reading about energy sources using target vocab & grammar"],
            [12, "Unit 10: Energy Sources – Lesson 2: Talking about energy use", "Types of energy sources, Pronunciation: stress in three-syllable words", "Present continuous", "Workbook tasks + speaking/writing on Talking about energy use", "Students can talking about energy use using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Energy Sources – Lesson 3: Writing about saving energy", "Types of energy sources, Pronunciation: stress in three-syllable words", "Present continuous", "Workbook tasks + speaking/writing on Writing about saving energy", "Students can writing about saving energy using target vocab & grammar"],
            [15, "Unit 11: Travelling in the Future – Lesson 1: Reading about transport in the future", "Future means of transport, Pronunciation: sentence stress", "Future simple, Possessive pronouns", "Workbook tasks + speaking/writing on Reading about transport in the future", "Students can reading about transport in the future using target vocab & grammar"],
            [16, "Unit 11: Travelling in the Future – Lesson 2: Talking about transport", "Future means of transport, Pronunciation: sentence stress", "Future simple, Possessive pronouns", "Workbook tasks + speaking/writing on Talking about transport", "Students can talking about transport using target vocab & grammar"],
            [17, "Unit 11: Travelling in the Future – Lesson 3: Writing about future transport", "Future means of transport, Pronunciation: sentence stress", "Future simple, Possessive pronouns", "Workbook tasks + speaking/writing on Writing about future transport", "Students can writing about future transport using target vocab & grammar"],
            [18, "Unit 12: English-speaking Countries – Lesson 1: Reading about English-speaking countries", "People and places in English-speaking countries, Intonation for questions", "Articles", "Workbook tasks + speaking/writing on Reading about English-speaking countries", "Students can reading about english-speaking countries using target vocab & grammar"],
            [19, "Unit 12: English-speaking Countries – Lesson 2: Talking about a country", "People and places in English-speaking countries, Intonation for questions", "Articles", "Workbook tasks + speaking/writing on Talking about a country", "Students can talking about a country using target vocab & grammar"],
            [20, "Unit 12: English-speaking Countries – Lesson 3: Writing a diary about a tour", "People and places in English-speaking countries, Intonation for questions", "Articles", "Workbook tasks + speaking/writing on Writing a diary about a tour", "Students can writing a diary about a tour using target vocab & grammar"],
            [21, "Project-based Learning: International Festival", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: International Festival", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: travel guidebook", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_teen4 as $lesson) {
            $teen4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
        // ========== ICY TEEN 5 ==========
        $teen5 = Subject::where('name', 'ICY Teen 5')->first();

        $lessons_teen5 = [
            [1, "Unit 1: Leisure Time – Lesson 1: Reading about leisure activities", "Leisure activities, Expressions of likes/dislikes, Sounds: /ʊ/ and /u:/", "Verbs of liking + gerunds, Verbs of liking + to-infinitives", "Workbook tasks + speaking/writing on Reading about leisure activities", "Students can reading about leisure activities using target vocab & grammar"],
            [2, "Unit 1: Leisure Time – Lesson 2: Talking about hobbies/leisure", "Leisure activities, Expressions of likes/dislikes, Sounds: /ʊ/ and /u:/", "Verbs of liking + gerunds, Verbs of liking + to-infinitives", "Workbook tasks + speaking/writing on Talking about hobbies/leisure", "Students can talking about hobbies/leisure using target vocab & grammar"],
            [3, "Unit 1: Leisure Time – Lesson 3: Writing an email about leisure", "Leisure activities, Expressions of likes/dislikes, Sounds: /ʊ/ and /u:/", "Verbs of liking + gerunds, Verbs of liking + to-infinitives", "Workbook tasks + speaking/writing on Writing an email about leisure", "Students can writing an email about leisure using target vocab & grammar"],
            [4, "Unit 2: Life in the Countryside – Lesson 1: Reading about countryside life", "Life in countryside, Sounds: /a:/ and /i/", "Comparatives of adverbs", "Workbook tasks + speaking/writing on Reading about countryside life", "Students can reading about countryside life using target vocab & grammar"],
            [5, "Unit 2: Life in the Countryside – Lesson 2: Talking about villages", "Life in countryside, Sounds: /a:/ and /i/", "Comparatives of adverbs", "Workbook tasks + speaking/writing on Talking about villages", "Students can talking about villages using target vocab & grammar"],
            [6, "Unit 2: Life in the Countryside – Lesson 3: Writing about life in the countryside", "Life in countryside, Sounds: /a:/ and /i/", "Comparatives of adverbs", "Workbook tasks + speaking/writing on Writing about life in the countryside", "Students can writing about life in the countryside using target vocab & grammar"],
            [7, "Unit 3: Teenagers – Lesson 1: Reading about school clubs", "Teen school clubs, Teen stress, Sounds: /əʊ/ and /ɔ:/", "Simple sentences, Compound sentences", "Workbook tasks + speaking/writing on Reading about school clubs", "Students can reading about school clubs using target vocab & grammar"],
            [8, "Unit 3: Teenagers – Lesson 2: Talking about teen stress", "Teen school clubs, Teen stress, Sounds: /əʊ/ and /ɔ:/", "Simple sentences, Compound sentences", "Workbook tasks + speaking/writing on Talking about teen stress", "Students can talking about teen stress using target vocab & grammar"],
            [9, "Unit 3: Teenagers – Lesson 3: Writing about causes of stress", "Teen school clubs, Teen stress, Sounds: /əʊ/ and /ɔ:/", "Simple sentences, Compound sentences", "Workbook tasks + speaking/writing on Writing about causes of stress", "Students can writing about causes of stress using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review vocabulary Units 1–3", "Review grammar Units 1–3", "Quiz + mini-poster project", "Students consolidate Units 1–3"],
            [11, "Unit 4: Ethnic Groups of Viet Nam – Lesson 1: Reading about ethnic homes", "Ethnic groups, Pronunciation: /k/ and /g/", "Yes/No and Wh-questions, Countable/uncountable nouns", "Workbook tasks + speaking/writing on Reading about ethnic homes", "Students can reading about ethnic homes using target vocab & grammar"],
            [12, "Unit 4: Ethnic Groups of Viet Nam – Lesson 2: Talking about ethnic life", "Ethnic groups, Pronunciation: /k/ and /g/", "Yes/No and Wh-questions, Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about ethnic life", "Students can talking about ethnic life using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: Ethnic Groups of Viet Nam – Lesson 3: Writing about helping family", "Ethnic groups, Pronunciation: /k/ and /g/", "Yes/No and Wh-questions, Countable/uncountable nouns", "Workbook tasks + speaking/writing on Writing about helping family", "Students can writing about helping family using target vocab & grammar"],
            [15, "Unit 5: Our Customs and Traditions – Lesson 1: Reading about festivals", "Customs & traditions, Sounds: /n/ and /ŋ/", "Zero article", "Workbook tasks + speaking/writing on Reading about festivals", "Students can reading about festivals using target vocab & grammar"],
            [16, "Unit 5: Our Customs and Traditions – Lesson 2: Talking about family events", "Customs & traditions, Sounds: /n/ and /ŋ/", "Zero article", "Workbook tasks + speaking/writing on Talking about family events", "Students can talking about family events using target vocab & grammar"],
            [17, "Unit 5: Our Customs and Traditions – Lesson 3: Writing about traditional festivals", "Customs & traditions, Sounds: /n/ and /ŋ/", "Zero article", "Workbook tasks + speaking/writing on Writing about traditional festivals", "Students can writing about traditional festivals using target vocab & grammar"],
            [18, "Unit 6: Lifestyles – Lesson 1: Reading about lifestyles", "Different lifestyles, Sounds: /br/ and /pr/", "Future simple, First conditional", "Workbook tasks + speaking/writing on Reading about lifestyles", "Students can reading about lifestyles using target vocab & grammar"],
            [19, "Unit 6: Lifestyles – Lesson 2: Talking about lifestyles", "Different lifestyles, Sounds: /br/ and /pr/", "Future simple, First conditional", "Workbook tasks + speaking/writing on Talking about lifestyles", "Students can talking about lifestyles using target vocab & grammar"],
            [20, "Unit 6: Lifestyles – Lesson 3: Writing about online learning vs. tradition", "Different lifestyles, Sounds: /br/ and /pr/", "Future simple, First conditional", "Workbook tasks + speaking/writing on Writing about online learning vs. tradition", "Students can writing about online learning vs. tradition using target vocab & grammar"],
            [21, "Project-based Learning: Vietnamese Culture Expo", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a cultural project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Vietnamese Culture Expo", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a cultural project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 2 (Units 4–6)", "Review vocabulary Units 4–6", "Review grammar Units 4–6", "Project: lifestyle magazine", "Students consolidate Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];

        foreach ($lessons_teen5 as $lesson) {
            $teen5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
        // ========== ICY TEEN 6 ==========
        $teen6 = Subject::where('name', 'ICY Teen 6')->first();

        $lessons_teen6 = [
            [1, "Unit 7: Environmental Protection – Lesson 1: Reading about national parks", "Environmental protection, Sounds: /bl/ and /kl/", "Complex sentences, Adverb clauses of time", "Workbook tasks + speaking/writing on Reading about national parks", "Students can reading about national parks using target vocab & grammar"],
            [2, "Unit 7: Environmental Protection – Lesson 2: Talking about environmental issues", "Environmental protection, Sounds: /bl/ and /kl/", "Complex sentences, Adverb clauses of time", "Workbook tasks + speaking/writing on Talking about environmental issues", "Students can talking about environmental issues using target vocab & grammar"],
            [3, "Unit 7: Environmental Protection – Lesson 3: Writing notices about pollution", "Environmental protection, Sounds: /bl/ and /kl/", "Complex sentences, Adverb clauses of time", "Workbook tasks + speaking/writing on Writing notices about pollution", "Students can writing notices about pollution using target vocab & grammar"],
            [4, "Unit 8: Shopping – Lesson 1: Reading about shopping habits", "Shopping, Sounds: /sp/ and /st/", "Adverbs of frequency, Present simple for future events", "Workbook tasks + speaking/writing on Reading about shopping habits", "Students can reading about shopping habits using target vocab & grammar"],
            [5, "Unit 8: Shopping – Lesson 2: Talking about shopping places", "Shopping, Sounds: /sp/ and /st/", "Adverbs of frequency, Present simple for future events", "Workbook tasks + speaking/writing on Talking about shopping places", "Students can talking about shopping places using target vocab & grammar"],
            [6, "Unit 8: Shopping – Lesson 3: Writing about online shopping", "Shopping, Sounds: /sp/ and /st/", "Adverbs of frequency, Present simple for future events", "Workbook tasks + speaking/writing on Writing about online shopping", "Students can writing about online shopping using target vocab & grammar"],
            [7, "Unit 9: Natural Disasters – Lesson 1: Reading about disasters", "Types of disasters, Disaster words, Stress: -al, -ous words", "Past continuous", "Workbook tasks + speaking/writing on Reading about disasters", "Students can reading about disasters using target vocab & grammar"],
            [8, "Unit 9: Natural Disasters – Lesson 2: Talking about disaster safety", "Types of disasters, Disaster words, Stress: -al, -ous words", "Past continuous", "Workbook tasks + speaking/writing on Talking about disaster safety", "Students can talking about disaster safety using target vocab & grammar"],
            [9, "Unit 9: Natural Disasters – Lesson 3: Writing instructions for disaster preparedness", "Types of disasters, Disaster words, Stress: -al, -ous words", "Past continuous", "Workbook tasks + speaking/writing on Writing instructions for disaster preparedness", "Students can writing instructions for disaster preparedness using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Quiz + project: environment campaign", "Students consolidate Units 7–9"],
            [11, "Unit 10: Communication in the Future – Lesson 1: Reading about communication", "Communication technology, Stress in -ese, -ee words", "Prepositions of place & time, Possessive pronouns", "Workbook tasks + speaking/writing on Reading about communication", "Students can reading about communication using target vocab & grammar"],
            [12, "Unit 10: Communication in the Future – Lesson 2: Talking about communication methods", "Communication technology, Stress in -ese, -ee words", "Prepositions of place & time, Possessive pronouns", "Workbook tasks + speaking/writing on Talking about communication methods", "Students can talking about communication methods using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Communication in the Future – Lesson 3: Writing about modern communication", "Communication technology, Stress in -ese, -ee words", "Prepositions of place & time, Possessive pronouns", "Workbook tasks + speaking/writing on Writing about modern communication", "Students can writing about modern communication using target vocab & grammar"],
            [15, "Unit 11: Science and Technology – Lesson 1: Reading about new technologies", "Science & tech in the future, Sentence stress", "Reported speech (statements)", "Workbook tasks + speaking/writing on Reading about new technologies", "Students can reading about new technologies using target vocab & grammar"],
            [16, "Unit 11: Science and Technology – Lesson 2: Talking about inventions", "Science & tech in the future, Sentence stress", "Reported speech (statements)", "Workbook tasks + speaking/writing on Talking about inventions", "Students can talking about inventions using target vocab & grammar"],
            [17, "Unit 11: Science and Technology – Lesson 3: Writing opinions about robots", "Science & tech in the future, Sentence stress", "Reported speech (statements)", "Workbook tasks + speaking/writing on Writing opinions about robots", "Students can writing opinions about robots using target vocab & grammar"],
            [18, "Unit 12: Life on Other Planets – Lesson 1: Reading about space life", "Outer space, Intonation for making lists", "Reported speech (questions)", "Workbook tasks + speaking/writing on Reading about space life", "Students can reading about space life using target vocab & grammar"],
            [19, "Unit 12: Life on Other Planets – Lesson 2: Talking about planets", "Outer space, Intonation for making lists", "Reported speech (questions)", "Workbook tasks + speaking/writing on Talking about planets", "Students can talking about planets using target vocab & grammar"],
            [20, "Unit 12: Life on Other Planets – Lesson 3: Writing about imaginary creatures", "Outer space, Intonation for making lists", "Reported speech (questions)", "Workbook tasks + speaking/writing on Writing about imaginary creatures", "Students can writing about imaginary creatures using target vocab & grammar"],
            [21, "Project-based Learning: Future World & Space", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Future World & Space", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: future technology fair", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_teen6 as $lesson) {
            $teen6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 7 ==========
        $teen7 = Subject::where('name', 'ICY Teen 7')->first();

        $lessons_teen7 = [
            [1, "Unit 1: Local Community – Lesson 1: Reading about community helpers", "Community helpers, Traditional handicrafts, Sounds: /æ/, /ɑː/, /e/", "Question words before to-infinitives, Phrasal verbs (1)", "Workbook tasks + speaking/writing on Reading about community helpers", "Students can reading about community helpers using target vocab & grammar"],
            [2, "Unit 1: Local Community – Lesson 2: Talking about specialities", "Community helpers, Traditional handicrafts, Sounds: /æ/, /ɑː/, /e/", "Question words before to-infinitives, Phrasal verbs (1)", "Workbook tasks + speaking/writing on Talking about specialities", "Students can talking about specialities using target vocab & grammar"],
            [3, "Unit 1: Local Community – Lesson 3: Writing about community helpers", "Community helpers, Traditional handicrafts, Sounds: /æ/, /ɑː/, /e/", "Question words before to-infinitives, Phrasal verbs (1)", "Workbook tasks + speaking/writing on Writing about community helpers", "Students can writing about community helpers using target vocab & grammar"],
            [4, "Unit 2: City Life – Lesson 1: Reading about city problems", "City life, Diphthongs: /aʊ/, /əʊ/, /eə/", "Double comparatives, Phrasal verbs (2)", "Workbook tasks + speaking/writing on Reading about city problems", "Students can reading about city problems using target vocab & grammar"],
            [5, "Unit 2: City Life – Lesson 2: Talking about city life", "City life, Diphthongs: /aʊ/, /əʊ/, /eə/", "Double comparatives, Phrasal verbs (2)", "Workbook tasks + speaking/writing on Talking about city life", "Students can talking about city life using target vocab & grammar"],
            [6, "Unit 2: City Life – Lesson 3: Writing about city life", "City life, Diphthongs: /aʊ/, /əʊ/, /eə/", "Double comparatives, Phrasal verbs (2)", "Workbook tasks + speaking/writing on Writing about city life", "Students can writing about city life using target vocab & grammar"],
            [7, "Unit 3: Healthy Living for Teens – Lesson 1: Reading about balanced lifestyles", "Student life, Sounds: /h/ and /r/", "Modal verbs in first conditional", "Workbook tasks + speaking/writing on Reading about balanced lifestyles", "Students can reading about balanced lifestyles using target vocab & grammar"],
            [8, "Unit 3: Healthy Living for Teens – Lesson 2: Talking about student life", "Student life, Sounds: /h/ and /r/", "Modal verbs in first conditional", "Workbook tasks + speaking/writing on Talking about student life", "Students can talking about student life using target vocab & grammar"],
            [9, "Unit 3: Healthy Living for Teens – Lesson 3: Writing about time management", "Student life, Sounds: /h/ and /r/", "Modal verbs in first conditional", "Workbook tasks + speaking/writing on Writing about time management", "Students can writing about time management using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review vocabulary Units 1–3", "Review grammar Units 1–3", "Quiz + class debate", "Students consolidate Units 1–3"],
            [11, "Unit 4: Remembering the Past – Lesson 1: Reading about the past", "Life in the past, Values of the past, Sounds: /m/ and /l/", "Past continuous, Wish + past simple", "Workbook tasks + speaking/writing on Reading about the past", "Students can reading about the past using target vocab & grammar"],
            [12, "Unit 4: Remembering the Past – Lesson 2: Talking about traditional dishes", "Life in the past, Values of the past, Sounds: /m/ and /l/", "Past continuous, Wish + past simple", "Workbook tasks + speaking/writing on Talking about traditional dishes", "Students can talking about traditional dishes using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: Remembering the Past – Lesson 3: Writing about old school days", "Life in the past, Values of the past, Sounds: /m/ and /l/", "Past continuous, Wish + past simple", "Workbook tasks + speaking/writing on Writing about old school days", "Students can writing about old school days using target vocab & grammar"],
            [15, "Unit 5: Our Experiences – Lesson 1: Reading about summer experiences", "Experiences, Adjectives of experiences, Sounds: /j/ and /w/", "Present perfect", "Workbook tasks + speaking/writing on Reading about summer experiences", "Students can reading about summer experiences using target vocab & grammar"],
            [16, "Unit 5: Our Experiences – Lesson 2: Talking about experiences", "Experiences, Adjectives of experiences, Sounds: /j/ and /w/", "Present perfect", "Workbook tasks + speaking/writing on Talking about experiences", "Students can talking about experiences using target vocab & grammar"],
            [17, "Unit 5: Our Experiences – Lesson 3: Writing about pleasant/unpleasant experiences", "Experiences, Adjectives of experiences, Sounds: /j/ and /w/", "Present perfect", "Workbook tasks + speaking/writing on Writing about pleasant/unpleasant experiences", "Students can writing about pleasant/unpleasant experiences using target vocab & grammar"],
            [18, "Unit 6: Vietnamese Lifestyle: Then and Now – Lesson 1: Reading about lifestyles", "Lifestyle changes, Sounds: /fl/ and /fr/", "Verbs + to-infinitive, Verbs + V-ing", "Workbook tasks + speaking/writing on Reading about lifestyles", "Students can reading about lifestyles using target vocab & grammar"],
            [19, "Unit 6: Vietnamese Lifestyle: Then and Now – Lesson 2: Talking about lifestyle changes", "Lifestyle changes, Sounds: /fl/ and /fr/", "Verbs + to-infinitive, Verbs + V-ing", "Workbook tasks + speaking/writing on Talking about lifestyle changes", "Students can talking about lifestyle changes using target vocab & grammar"],
            [20, "Unit 6: Vietnamese Lifestyle: Then and Now – Lesson 3: Writing about family changes", "Lifestyle changes, Sounds: /fl/ and /fr/", "Verbs + to-infinitive, Verbs + V-ing", "Workbook tasks + speaking/writing on Writing about family changes", "Students can writing about family changes using target vocab & grammar"],
            [21, "Project-based Learning: My Community & Lifestyle", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a group project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: My Community & Lifestyle", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a group project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 2 (Units 4–6)", "Review vocabulary Units 4–6", "Review grammar Units 4–6", "Mini project: lifestyle survey report", "Students consolidate Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];

        foreach ($lessons_teen7 as $lesson) {
            $teen7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 8 ==========
        $teen8 = Subject::where('name', 'ICY Teen 8')->first();

        $lessons_teen8 = [
            [1, "Unit 7: Natural Wonders of the World – Lesson 1: Reading about natural wonders", "Natural wonders, Sounds: /ʃ/ and /sn/", "Reported speech (Yes/No questions)", "Workbook tasks + speaking/writing on Reading about natural wonders", "Students can reading about natural wonders using target vocab & grammar"],
            [2, "Unit 7: Natural Wonders of the World – Lesson 2: Talking about natural wonders", "Natural wonders, Sounds: /ʃ/ and /sn/", "Reported speech (Yes/No questions)", "Workbook tasks + speaking/writing on Talking about natural wonders", "Students can talking about natural wonders using target vocab & grammar"],
            [3, "Unit 7: Natural Wonders of the World – Lesson 3: Writing about a natural wonder", "Natural wonders, Sounds: /ʃ/ and /sn/", "Reported speech (Yes/No questions)", "Workbook tasks + speaking/writing on Writing about a natural wonder", "Students can writing about a natural wonder using target vocab & grammar"],
            [4, "Unit 8: Tourism – Lesson 1: Reading about tours", "Tourism, Stress in -ic, -ious words", "Relative pronouns", "Workbook tasks + speaking/writing on Reading about tours", "Students can reading about tours using target vocab & grammar"],
            [5, "Unit 8: Tourism – Lesson 2: Talking about travel", "Tourism, Stress in -ic, -ious words", "Relative pronouns", "Workbook tasks + speaking/writing on Talking about travel", "Students can talking about travel using target vocab & grammar"],
            [6, "Unit 8: Tourism – Lesson 3: Writing about a tour", "Tourism, Stress in -ic, -ious words", "Relative pronouns", "Workbook tasks + speaking/writing on Writing about a tour", "Students can writing about a tour using target vocab & grammar"],
            [7, "Unit 9: World Englishes – Lesson 1: Reading about English worldwide", "Aspects of language, Stress in -ion, -ity words", "Defining relative clauses", "Workbook tasks + speaking/writing on Reading about English worldwide", "Students can reading about english worldwide using target vocab & grammar"],
            [8, "Unit 9: World Englishes – Lesson 2: Talking about borrowed words", "Aspects of language, Stress in -ion, -ity words", "Defining relative clauses", "Workbook tasks + speaking/writing on Talking about borrowed words", "Students can talking about borrowed words using target vocab & grammar"],
            [9, "Unit 9: World Englishes – Lesson 3: Writing about English learning", "Aspects of language, Stress in -ion, -ity words", "Defining relative clauses", "Workbook tasks + speaking/writing on Writing about English learning", "Students can writing about english learning using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Quiz + travel brochure project", "Students consolidate Units 7–9"],
            [11, "Unit 10: Planet Earth – Lesson 1: Reading about flora & fauna", "Planet Earth, Habitats, Rhythm in sentences", "Non-defining relative clauses", "Workbook tasks + speaking/writing on Reading about flora & fauna", "Students can reading about flora & fauna using target vocab & grammar"],
            [12, "Unit 10: Planet Earth – Lesson 2: Talking about environmental protection", "Planet Earth, Habitats, Rhythm in sentences", "Non-defining relative clauses", "Workbook tasks + speaking/writing on Talking about environmental protection", "Students can talking about environmental protection using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Planet Earth – Lesson 3: Writing a summary about environment", "Planet Earth, Habitats, Rhythm in sentences", "Non-defining relative clauses", "Workbook tasks + speaking/writing on Writing a summary about environment", "Students can writing a summary about environment using target vocab & grammar"],
            [15, "Unit 11: Electronic Devices – Lesson 1: Reading about devices", "Electronic devices, Stress in sentences", "Suggest/advise/recommend + V-ing, Should clauses", "Workbook tasks + speaking/writing on Reading about devices", "Students can reading about devices using target vocab & grammar"],
            [16, "Unit 11: Electronic Devices – Lesson 2: Talking about electronics", "Electronic devices, Stress in sentences", "Suggest/advise/recommend + V-ing, Should clauses", "Workbook tasks + speaking/writing on Talking about electronics", "Students can talking about electronics using target vocab & grammar"],
            [17, "Unit 11: Electronic Devices – Lesson 3: Writing about future technology", "Electronic devices, Stress in sentences", "Suggest/advise/recommend + V-ing, Should clauses", "Workbook tasks + speaking/writing on Writing about future technology", "Students can writing about future technology using target vocab & grammar"],
            [18, "Unit 12: Career Choices – Lesson 1: Reading about jobs", "Jobs, Intonation in questions", "Adverbial clauses (concession, result, reason)", "Workbook tasks + speaking/writing on Reading about jobs", "Students can reading about jobs using target vocab & grammar"],
            [19, "Unit 12: Career Choices – Lesson 2: Talking about careers", "Jobs, Intonation in questions", "Adverbial clauses (concession, result, reason)", "Workbook tasks + speaking/writing on Talking about careers", "Students can talking about careers using target vocab & grammar"],
            [20, "Unit 12: Career Choices – Lesson 3: Writing an email about job choice", "Jobs, Intonation in questions", "Adverbial clauses (concession, result, reason)", "Workbook tasks + speaking/writing on Writing an email about job choice", "Students can writing about job choice using target vocab & grammar"],
            [21, "Project-based Learning: Global English & Careers", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Global English & Careers", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: career fair roleplay", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_teen8 as $lesson) {
            $teen8->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 1 ==========
        $ic1 = Subject::where('name', 'ICY Communication 1')->first();

        $lessons_ic1 = [
            [1, "Unit 1: Introductions and Names – Lesson 1: Listening for greetings", "Greetings vocabulary, Linking vowel sounds", "Basic greetings structures", "Workbook tasks + speaking/writing on Listening for greetings", "Students can listening for greetings using target vocab & grammar"],
            [2, "Unit 1: Introductions and Names – Lesson 2: Talking about introductions", "Greetings vocabulary, Linking vowel sounds", "Basic greetings structures", "Workbook tasks + speaking/writing on Talking about introductions", "Students can talking about introductions using target vocab & grammar"],
            [3, "Unit 2: Describing People – Lesson 1: Listening about physical appearance", "Appearance vocabulary, Intonation of Yes/No questions", "Yes/No question forms", "Workbook tasks + speaking/writing on Listening about physical appearance", "Students can listening about physical appearance using target vocab & grammar"],
            [4, "Unit 2: Describing People – Lesson 2: Talking about people", "Appearance vocabulary, Intonation of Yes/No questions", "Yes/No question forms", "Workbook tasks + speaking/writing on Talking about people", "Students can talking about people using target vocab & grammar"],
            [5, "Unit 3: Clothes – Lesson 1: Listening about clothes", "Clothes vocabulary, Plural -s endings", "Noun plurals", "Workbook tasks + speaking/writing on Listening about clothes", "Students can listening about clothes using target vocab & grammar"],
            [6, "Unit 3: Clothes – Lesson 2: Talking about fashion", "Clothes vocabulary, Plural -s endings", "Noun plurals", "Workbook tasks + speaking/writing on Talking about fashion", "Students can talking about fashion using target vocab & grammar"],
            [7, "Unit 4: Routines – Lesson 1: Listening about routines", "Numbers, routines, Syllable stress in numbers", "Present simple", "Workbook tasks + speaking/writing on Listening about routines", "Students can listening about routines using target vocab & grammar"],
            [8, "Unit 4: Routines – Lesson 2: Talking about routines", "Numbers, routines, Syllable stress in numbers", "Present simple", "Workbook tasks + speaking/writing on Talking about routines", "Students can talking about routines using target vocab & grammar"],
            [9, "Unit 5: Dates – Lesson 1: Listening about dates", "Dates vocabulary, Ordinal numbers", "Using ordinal numbers", "Workbook tasks + speaking/writing on Listening about dates", "Students can listening about dates using target vocab & grammar"],
            [10, "Unit 6: Jobs – Lesson 1: Listening about jobs", "Jobs vocabulary, Syllable stress in words", "Job expressions", "Workbook tasks + speaking/writing on Listening about jobs", "Students can listening about jobs using target vocab & grammar"],
            [11, "Unit 6: Jobs – Lesson 2: Talking about jobs", "Jobs vocabulary, Syllable stress in words", "Job expressions", "Workbook tasks + speaking/writing on Talking about jobs", "Students can talking about jobs using target vocab & grammar"],
            [12, "Unit 7: Favorites – Lesson 1: Listening about favorites", "Favorites vocabulary, Intonation of Wh-questions", "Wh-questions", "Workbook tasks + speaking/writing on Listening about favorites", "Students can listening about favorites using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Favorites – Lesson 2: Talking about favorite things", "Favorites vocabulary, Intonation of Wh-questions", "Wh-questions", "Workbook tasks + speaking/writing on Talking about favorite things", "Students can talking about favorite things using target vocab & grammar"],
            [15, "Unit 8: Sports and Exercise – Lesson 1: Listening about sports", "Sports vocabulary, Sentence stress", "Frequency adverbs", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [16, "Unit 8: Sports and Exercise – Lesson 2: Talking about sports", "Sports vocabulary, Sentence stress", "Frequency adverbs", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [17, "Unit 9: Locations – Lesson 1: Listening about locations", "Locations vocabulary, Contracted 'not'", "Prepositions of place", "Workbook tasks + speaking/writing on Listening about locations", "Students can listening about locations using target vocab & grammar"],
            [18, "Unit 9: Locations – Lesson 2: Talking about locations", "Locations vocabulary, Contracted 'not'", "Prepositions of place", "Workbook tasks + speaking/writing on Talking about locations", "Students can talking about locations using target vocab & grammar"],
            [19, "Unit 10: The Family – Lesson 1: Listening about families", "Family vocabulary, Reduction of do/does/are", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about families", "Students can listening about families using target vocab & grammar"],
            [20, "Unit 11: Entertainment – Lesson 1: Listening about invitations", "Entertainment vocabulary, Reduction of vowel sound in 'can'", "Invitation expressions", "Workbook tasks + speaking/writing on Listening about invitations", "Students can listening about invitations using target vocab & grammar"],
            [21, "Unit 11: Entertainment – Lesson 2: Making invitations", "Entertainment vocabulary, Reduction of vowel sound in 'can'", "Invitation expressions", "Workbook tasks + speaking/writing on Making invitations", "Students can making invitations using target vocab & grammar"],
            [22, "Unit 12: Prices – Lesson 1: Listening about prices", "Money, prices, Saying large numbers", "Comparisons with numbers", "Workbook tasks + speaking/writing on Listening about prices", "Students can listening about prices using target vocab & grammar"],
            [23, "Unit 12: Prices – Lesson 2: Talking about money", "Money, prices, Saying large numbers", "Comparisons with numbers", "Workbook tasks + speaking/writing on Talking about money", "Students can talking about money using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic1 as $lesson) {
            $ic1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 2 ==========

        $ic2 = Subject::where('name', 'ICY Communication 2')->first();

        $lessons_ic2 = [
            [1, "Unit 13: Restaurants – Lesson 1: Listening about meals", "Food vocabulary, Past tense wasn’t/weren’t", "Talking about past events", "Workbook tasks + speaking/writing on Listening about meals", "Students can listening about meals using target vocab & grammar"],
            [2, "Unit 13: Restaurants – Lesson 2: Talking about food", "Food vocabulary, Past tense wasn’t/weren’t", "Talking about past events", "Workbook tasks + speaking/writing on Talking about food", "Students can talking about food using target vocab & grammar"],
            [3, "Unit 14: Small Talk – Lesson 1: Listening to greetings", "Greetings, Reduction of Wh-questions", "Wh-question forms", "Workbook tasks + speaking/writing on Listening to greetings", "Students can listening to greetings using target vocab & grammar"],
            [4, "Unit 15: Vacations – Lesson 1: Listening about vacations", "Vacations, Past tense -ed endings", "Past tense verbs", "Workbook tasks + speaking/writing on Listening about vacations", "Students can listening about vacations using target vocab & grammar"],
            [5, "Unit 15: Vacations – Lesson 2: Talking about trips", "Vacations, Past tense -ed endings", "Past tense verbs", "Workbook tasks + speaking/writing on Talking about trips", "Students can talking about trips using target vocab & grammar"],
            [6, "Unit 16: Apartment Living – Lesson 1: Listening about apartments", "Rooms vocabulary, Contractions: there is/are", "There is/are usage", "Workbook tasks + speaking/writing on Listening about apartments", "Students can listening about apartments using target vocab & grammar"],
            [7, "Unit 16: Apartment Living – Lesson 2: Talking about rooms", "Rooms vocabulary, Contractions: there is/are", "There is/are usage", "Workbook tasks + speaking/writing on Talking about rooms", "Students can talking about rooms using target vocab & grammar"],
            [8, "Unit 17: Hopes and Plans – Lesson 1: Listening about future plans", "Future plans vocabulary, Reduction of want to, going to", "Future forms", "Workbook tasks + speaking/writing on Listening about future plans", "Students can listening about future plans using target vocab & grammar"],
            [9, "Unit 17: Hopes and Plans – Lesson 2: Talking about hopes", "Future plans vocabulary, Reduction of want to, going to", "Future forms", "Workbook tasks + speaking/writing on Talking about hopes", "Students can talking about hopes using target vocab & grammar"],
            [10, "Unit 18: The Weather – Lesson 1: Listening about weather", "Weather vocabulary, Intonation of series", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [11, "Unit 18: The Weather – Lesson 2: Talking about weather", "Weather vocabulary, Intonation of series", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [12, "Unit 19: Shopping – Lesson 1: Listening about shopping", "Shopping vocabulary, Contrastive stress", "Shopping expressions", "Workbook tasks + speaking/writing on Listening about shopping", "Students can listening about shopping using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 13–18)", "Students demonstrate mastery of Units 13–18"],
            [14, "Unit 19: Shopping – Lesson 2: Talking about stores", "Shopping vocabulary, Contrastive stress", "Shopping expressions", "Workbook tasks + speaking/writing on Talking about stores", "Students can talking about stores using target vocab & grammar"],
            [15, "Unit 20: Describing Things – Lesson 1: Listening about objects", "Objects vocabulary, Syllable stress in adjectives", "Describing objects", "Workbook tasks + speaking/writing on Listening about objects", "Students can listening about objects using target vocab & grammar"],
            [16, "Unit 20: Describing Things – Lesson 2: Talking about possessions", "Objects vocabulary, Syllable stress in adjectives", "Describing objects", "Workbook tasks + speaking/writing on Talking about possessions", "Students can talking about possessions using target vocab & grammar"],
            [17, "Unit 21: Directions – Lesson 1: Listening about directions", "Places vocabulary, Intonation for confirming info", "Asking for/giving directions", "Workbook tasks + speaking/writing on Listening about directions", "Students can listening about directions using target vocab & grammar"],
            [18, "Unit 21: Directions – Lesson 2: Talking about streets", "Places vocabulary, Intonation for confirming info", "Asking for/giving directions", "Workbook tasks + speaking/writing on Talking about streets", "Students can talking about streets using target vocab & grammar"],
            [19, "Unit 22: People We Know – Lesson 1: Listening about people", "People vocabulary, Third person -s", "Describing people", "Workbook tasks + speaking/writing on Listening about people", "Students can listening about people using target vocab & grammar"],
            [20, "Unit 23: Places – Lesson 1: Listening about cities", "Cities & countries, Sentence stress", "Comparisons of places", "Workbook tasks + speaking/writing on Listening about cities", "Students can listening about cities using target vocab & grammar"],
            [21, "Unit 23: Places – Lesson 2: Talking about places", "Cities & countries, Sentence stress", "Comparisons of places", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [22, "Unit 24: Health – Lesson 1: Listening about health", "Health vocabulary, Reduction of 'did you'", "Health expressions", "Workbook tasks + speaking/writing on Listening about health", "Students can listening about health using target vocab & grammar"],
            [23, "Unit 24: Health – Lesson 2: Talking about health", "Health vocabulary, Reduction of 'did you'", "Health expressions", "Workbook tasks + speaking/writing on Talking about health", "Students can talking about health using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 19–24)", "Students demonstrate mastery of Units 19–24"],
        ];

        foreach ($lessons_ic2 as $lesson) {
            $ic2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 3 ==========
        $ic3 = Subject::where('name', 'ICY Communication 3')->first();

        $lessons_ic3 = [
            [1, "Unit 1: Restaurants – Lesson 1: Listening to conversations", "Restaurant vocabulary, Sentence stress", "Would like + noun", "Workbook tasks + speaking/writing on Listening to conversations", "Students can listening to conversations using target vocab & grammar"],
            [2, "Unit 1: Restaurants – Lesson 2: Ordering food", "Restaurant vocabulary, Sentence stress", "Would like + noun", "Workbook tasks + speaking/writing on Ordering food", "Students can ordering food using target vocab & grammar"],
            [3, "Unit 2: Time – Lesson 1: Listening about time", "Time vocabulary, Syllable stress", "Prepositions of time", "Workbook tasks + speaking/writing on Listening about time", "Students can listening about time using target vocab & grammar"],
            [4, "Unit 2: Time – Lesson 2: Talking about time", "Time vocabulary, Syllable stress", "Prepositions of time", "Workbook tasks + speaking/writing on Talking about time", "Students can talking about time using target vocab & grammar"],
            [5, "Unit 3: Daily Routines – Lesson 1: Listening about routines", "Routine vocabulary, Third person -s", "Present simple", "Workbook tasks + speaking/writing on Listening about routines", "Students can listening about routines using target vocab & grammar"],
            [6, "Unit 3: Daily Routines – Lesson 2: Talking about routines", "Routine vocabulary, Third person -s", "Present simple", "Workbook tasks + speaking/writing on Talking about routines", "Students can talking about routines using target vocab & grammar"],
            [7, "Unit 4: Jobs – Lesson 1: Listening about jobs", "Jobs vocabulary, Word stress in compound nouns", "Present continuous", "Workbook tasks + speaking/writing on Listening about jobs", "Students can listening about jobs using target vocab & grammar"],
            [8, "Unit 4: Jobs – Lesson 2: Talking about jobs", "Jobs vocabulary, Word stress in compound nouns", "Present continuous", "Workbook tasks + speaking/writing on Talking about jobs", "Students can talking about jobs using target vocab & grammar"],
            [9, "Unit 5: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Syllable stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [10, "Unit 5: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Syllable stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [11, "Unit 6: Family – Lesson 1: Listening about family members", "Family vocabulary, Sentence stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family members", "Students can listening about family members using target vocab & grammar"],
            [12, "Unit 6: Family – Lesson 2: Talking about family", "Family vocabulary, Sentence stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about family", "Students can talking about family using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Places in Town – Lesson 1: Listening about places", "Places vocabulary, Weak forms", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [15, "Unit 7: Places in Town – Lesson 2: Talking about places", "Places vocabulary, Weak forms", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [16, "Unit 8: Directions – Lesson 1: Listening about directions", "Directions vocabulary, Intonation of questions", "Giving directions", "Workbook tasks + speaking/writing on Listening about directions", "Students can listening about directions using target vocab & grammar"],
            [17, "Unit 8: Directions – Lesson 2: Talking about directions", "Directions vocabulary, Intonation of questions", "Giving directions", "Workbook tasks + speaking/writing on Talking about directions", "Students can talking about directions using target vocab & grammar"],
            [18, "Unit 9: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [19, "Unit 9: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [20, "Unit 10: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Intonation in series", "Future forms (going to)", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [21, "Unit 10: Travel – Lesson 2: Talking about travel", "Travel vocabulary, Intonation in series", "Future forms (going to)", "Workbook tasks + speaking/writing on Talking about travel", "Students can talking about travel using target vocab & grammar"],
            [22, "Unit 11: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Word stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [23, "Unit 11: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Word stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic3 as $lesson) {
            $ic3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 4 ==========
        $ic4 = Subject::where('name', 'ICY Communication 4')->first();

        $lessons_ic4 = [
            [1, "Unit 1: Personal Information – Lesson 1: Listening about personal info", "Personal info vocabulary, Intonation in Wh-questions", "Wh-questions with be/do", "Workbook tasks + speaking/writing on Listening about personal info", "Students can listening about personal info using target vocab & grammar"],
            [2, "Unit 1: Personal Information – Lesson 2: Talking about personal info", "Personal info vocabulary, Intonation in Wh-questions", "Wh-questions with be/do", "Workbook tasks + speaking/writing on Talking about personal info", "Students can talking about personal info using target vocab & grammar"],
            [3, "Unit 2: Daily Activities – Lesson 1: Listening about daily activities", "Daily activity vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Listening about daily activities", "Students can listening about daily activities using target vocab & grammar"],
            [4, "Unit 2: Daily Activities – Lesson 2: Talking about daily routines", "Daily activity vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Talking about daily routines", "Students can talking about daily routines using target vocab & grammar"],
            [5, "Unit 3: Food and Drinks – Lesson 1: Listening about food", "Food & drinks vocabulary, Plural nouns", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Listening about food", "Students can listening about food using target vocab & grammar"],
            [6, "Unit 3: Food and Drinks – Lesson 2: Talking about food habits", "Food & drinks vocabulary, Plural nouns", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about food habits", "Students can talking about food habits using target vocab & grammar"],
            [7, "Unit 4: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [8, "Unit 4: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [9, "Unit 5: Family and Friends – Lesson 1: Listening about family", "Family vocabulary, Word stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family", "Students can listening about family using target vocab & grammar"],
            [10, "Unit 5: Family and Friends – Lesson 2: Talking about friends", "Friends vocabulary, Word stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about friends", "Students can talking about friends using target vocab & grammar"],
            [11, "Unit 6: Shopping – Lesson 1: Listening about shopping", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Listening about shopping", "Students can listening about shopping using target vocab & grammar"],
            [12, "Unit 6: Shopping – Lesson 2: Talking about clothes", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Talking about clothes", "Students can talking about clothes using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Sports – Lesson 1: Listening about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [15, "Unit 7: Sports – Lesson 2: Talking about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [16, "Unit 8: Places in Town – Lesson 1: Listening about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [17, "Unit 8: Places in Town – Lesson 2: Talking about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [18, "Unit 9: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [19, "Unit 9: Travel – Lesson 2: Talking about travel plans", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Talking about travel plans", "Students can talking about travel plans using target vocab & grammar"],
            [20, "Unit 10: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [21, "Unit 10: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [22, "Unit 11: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [23, "Unit 11: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic4 as $lesson) {
            $ic4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 5 ==========
        $ic5 = Subject::where('name', 'ICY Communication 5')->first();

        $lessons_ic5 = [
            [1, "Unit 1: Describing People – Lesson 1: Listening about appearance", "Appearance vocabulary, Intonation in Yes/No questions", "Yes/No questions with be", "Workbook tasks + speaking/writing on Listening about appearance", "Students can listening about appearance using target vocab & grammar"],
            [2, "Unit 1: Describing People – Lesson 2: Talking about people", "Appearance vocabulary, Intonation in Yes/No questions", "Yes/No questions with be", "Workbook tasks + speaking/writing on Talking about people", "Students can talking about people using target vocab & grammar"],
            [3, "Unit 2: Daily Routines – Lesson 1: Listening about routines", "Routine vocabulary, Word stress", "Present simple", "Workbook tasks + speaking/writing on Listening about routines", "Students can listening about routines using target vocab & grammar"],
            [4, "Unit 2: Daily Routines – Lesson 2: Talking about routines", "Routine vocabulary, Word stress", "Present simple", "Workbook tasks + speaking/writing on Talking about routines", "Students can talking about routines using target vocab & grammar"],
            [5, "Unit 3: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [6, "Unit 3: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [7, "Unit 4: Food and Drinks – Lesson 1: Listening about food", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Listening about food", "Students can listening about food using target vocab & grammar"],
            [8, "Unit 4: Food and Drinks – Lesson 2: Talking about meals", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about meals", "Students can talking about meals using target vocab & grammar"],
            [9, "Unit 5: Family – Lesson 1: Listening about family members", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family members", "Students can listening about family members using target vocab & grammar"],
            [10, "Unit 5: Family – Lesson 2: Talking about family", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about family", "Students can talking about family using target vocab & grammar"],
            [11, "Unit 6: Shopping – Lesson 1: Listening about shopping", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Listening about shopping", "Students can listening about shopping using target vocab & grammar"],
            [12, "Unit 6: Shopping – Lesson 2: Talking about clothes", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Talking about clothes", "Students can talking about clothes using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Sports – Lesson 1: Listening about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [15, "Unit 7: Sports – Lesson 2: Talking about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [16, "Unit 8: Places in Town – Lesson 1: Listening about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [17, "Unit 8: Places in Town – Lesson 2: Talking about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [18, "Unit 9: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [19, "Unit 9: Travel – Lesson 2: Talking about travel plans", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Talking about travel plans", "Students can talking about travel plans using target vocab & grammar"],
            [20, "Unit 10: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [21, "Unit 10: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [22, "Unit 11: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [23, "Unit 11: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic5 as $lesson) {
            $ic5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 6 ==========
        $ic6 = Subject::where('name', 'ICY Communication 6')->first();

        $lessons_ic6 = [
            [1, "Unit 1: Daily Activities – Lesson 1: Listening about daily routines", "Daily routine vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Listening about daily routines", "Students can listening about daily routines using target vocab & grammar"],
            [2, "Unit 1: Daily Activities – Lesson 2: Talking about daily routines", "Daily routine vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Talking about daily routines", "Students can talking about daily routines using target vocab & grammar"],
            [3, "Unit 2: Food and Drinks – Lesson 1: Listening about food", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Listening about food", "Students can listening about food using target vocab & grammar"],
            [4, "Unit 2: Food and Drinks – Lesson 2: Talking about meals", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about meals", "Students can talking about meals using target vocab & grammar"],
            [5, "Unit 3: Family and Friends – Lesson 1: Listening about family", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family", "Students can listening about family using target vocab & grammar"],
            [6, "Unit 3: Family and Friends – Lesson 2: Talking about family", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about family", "Students can talking about family using target vocab & grammar"],
            [7, "Unit 4: Jobs – Lesson 1: Listening about jobs", "Jobs vocabulary, Syllable stress in words", "Have got/has got", "Workbook tasks + speaking/writing on Listening about jobs", "Students can listening about jobs using target vocab & grammar"],
            [8, "Unit 4: Jobs – Lesson 2: Talking about jobs", "Jobs vocabulary, Syllable stress in words", "Have got/has got", "Workbook tasks + speaking/writing on Talking about jobs", "Students can talking about jobs using target vocab & grammar"],
            [9, "Unit 5: Places – Lesson 1: Listening about places", "Places vocabulary, Intonation of Wh-questions", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [10, "Unit 5: Places – Lesson 2: Talking about places", "Places vocabulary, Intonation of Wh-questions", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [11, "Unit 6: Sports – Lesson 1: Listening about sports", "Sports vocabulary, Sentence stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [12, "Unit 6: Sports – Lesson 2: Talking about sports", "Sports vocabulary, Sentence stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Intonation in Yes/No questions", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [15, "Unit 7: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Intonation in Yes/No questions", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [16, "Unit 8: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Word stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [17, "Unit 8: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Word stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [18, "Unit 9: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Syllable stress in words", "Going to future", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [19, "Unit 9: Travel – Lesson 2: Talking about travel plans", "Travel vocabulary, Syllable stress in words", "Going to future", "Workbook tasks + speaking/writing on Talking about travel plans", "Students can talking about travel plans using target vocab & grammar"],
            [20, "Unit 10: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Sentence stress", "Present continuous", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [21, "Unit 10: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Sentence stress", "Present continuous", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [22, "Unit 11: Health – Lesson 1: Listening about health", "Health vocabulary, Contrastive stress", "Should/shouldn’t", "Workbook tasks + speaking/writing on Listening about health", "Students can listening about health using target vocab & grammar"],
            [23, "Unit 11: Health – Lesson 2: Talking about health", "Health vocabulary, Contrastive stress", "Should/shouldn’t", "Workbook tasks + speaking/writing on Talking about health", "Students can talking about health using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic6 as $lesson) {
            $ic6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 7 ==========
        $subject = Subject::where('name', 'ICY Communication 7')->first();

        $lessons = [
            [1,  "Unit 1: Introductions – Lesson 1: Introduce yourself", "Nationalities, Jobs", "to be, a/an with jobs, wh- questions", "Write self-introduction", "Introduce self and others"],
            [2,  "Unit 1: Introductions – Lesson 2: Listening & Reading (Interview, From small town to global leader)", "Work roles, Leadership", "Present simple, Leadership vocabulary", "Summarize interview", "Understand interviews"],
            [3,  "Unit 1: Introductions – Lesson 3: Case Study – A job fair in Singapore, Writing: email", "Job fair, Recruitment", "Email format", "Draft a job application email", "Write formal email"],
            [4,  "Unit 2: Work and Leisure – Lesson 1: Discuss what people want from work", "Leisure activities, Staff needs", "Days, months, dates; Present simple; Frequency adverbs", "Make a work diary", "Talk about work and leisure"],
            [5,  "Unit 2: Work and Leisure – Lesson 2: Listening & Reading (Business diary, Interview)", "Business terms, Diary", "Present simple review", "Interview a peer", "Understand business texts"],
            [6,  "Unit 2: Work and Leisure – Lesson 3: Case Study – Hudson Design Inc., Writing: email", "Customer issues", "Email politeness forms", "Write staff complaint response", "Handle staff issues"],
            [7,  "Unit 3: Problems – Lesson 1: Talk about problems at work", "Problems, Solutions", "Adjectives too/enough, Present simple negatives, have, some/any", "Write problem-solution dialogue", "Discuss problems"],
            [8,  "Unit 3: Problems – Lesson 2: Listening & Reading (Change leadership, Call-centre interviews)", "Call-centre, Feedback", "Question forms", "Role-play a call-centre", "Understand interviews"],
            [9,  "Unit 3: Problems – Lesson 3: Case Study – High-Style Business Rentals, Writing: email", "Customer response", "Email structure", "Email reply practice", "Respond to customer feedback"],
            [10, "Working Across Cultures 1: Eating Out", "Eating out, Culture", "Cultural expressions", "Research cultural dining habits", "Understand cultural differences"],
            [11, "Revision A", "Review vocab Units 1–3", "Review Units 1–3 grammar", "Unit 1–3 practice test", "Review learning"],
            [12, "Unit 4: Travel – Lesson 1: Talk about business travel", "Travel, Hotel", "can/can’t, there is/are", "Describe business trip", "Talk about travel"],
            [13, "Unit 4: Travel – Lesson 2: Listening & Reading (Interview, Hilton Tokyo)", "Booking, Arrangements", "Requests, polite forms", "Booking dialogue", "Handle bookings"],
            [14, "Unit 4: Travel – Lesson 3: Case Study – Gustav Conference Centre, Writing: email", "Conference, Companies", "Formal writing", "Conference email writing", "Coordinate meetings"],
            [15, "Unit 5: Food and Entertaining – Lesson 1: Discuss food from different countries", "Food, Cuisines", "some/any, Countable & uncountable nouns", "Write food journal", "Discuss food & culture"],
            [16, "Unit 5: Food and Entertaining – Lesson 2: Listening & Reading (Fast-food chains, Interview)", "Fast-food, Global brands", "Food-related grammar", "Summarize fast-food article", "Understand articles"],
            [17, "Unit 5: Food and Entertaining – Lesson 3: Case Study – Which restaurant?, Writing: email", "Restaurant choices", "Decision-making phrases", "Choose restaurant activity", "Make decisions"],
            [18, "Unit 6: Buying and Selling – Lesson 1: Talk about buying different products", "Products, Services", "Past simple, Time references", "Make product description", "Describe products"],
            [19, "Unit 6: Buying and Selling – Lesson 2: Listening & Reading (Uniqlo, Interview)", "Success story, Management", "Comparisons", "Summarize Uniqlo text", "Understand success stories"],
            [20, "Unit 6: Buying and Selling – Lesson 3: Case Study – NP Innovations, Writing: email", "Innovation, Marketing", "Product descriptions", "Write innovation email", "Make innovation proposals"],
            [21, "Working Across Cultures 2: Communication Styles", "Communication styles", "Politeness strategies", "Compare communication styles", "Understand communication styles"],
            [22, "Revision B", "Review vocab Units 4–6", "Review Units 4–6 grammar", "Unit 4–6 practice test", "Review learning"],
            [23, "Mid-term Test", "Mid-term test vocabulary", "Grammar from Units 1–6", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Business theme)", "Presentation language", "Presentation connectors", "Prepare group presentation", "Present in English"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 8 ==========
        $subject = Subject::where('name', 'ICY Communication 8')->first();

        $lessons = [
            [1,  "Unit 7: People – Lesson 1: Talk about how you like to work", "Work preferences, People", "Past simple negatives & questions, Question forms", "Write about work style", "Describe work preferences"],
            [2,  "Unit 7: People – Lesson 2: Listening & Reading (Interview, Women at the top)", "Management, Leadership", "Describing people, Review grammar", "Summarize leadership text", "Understand leadership texts"],
            [3,  "Unit 7: People – Lesson 3: Case Study – Tell us about it!, Writing: reply to a problem message", "Problem messages", "Email reply structure", "Draft reply to problem email", "Reply to formal messages"],
            [4,  "Unit 8: Advertising – Lesson 1: Do an advertising quiz", "Advertising, Markets", "Comparatives, Superlatives, much/a lot/a little/a bit", "Do advertising survey", "Understand ads"],
            [5,  "Unit 8: Advertising – Lesson 2: Listening & Reading (Volkswagen ad, Interview)", "Comparatives, Superlatives", "Advertising grammar", "Summarize ad campaign", "Analyze campaigns"],
            [6,  "Unit 8: Advertising – Lesson 3: Case Study – Excelsior Chocolate Products, Writing: product launch plan", "Product launch", "Product launch writing", "Write product launch email", "Plan product launches"],
            [7,  "Unit 9: Companies – Lesson 1: Do a companies quiz", "Companies, Leadership", "Present continuous, Present simple", "Company quiz", "Discuss companies"],
            [8,  "Unit 9: Companies – Lesson 2: Listening & Reading (Change leadership, New markets)", "New markets, Industries", "Describing companies", "Summarize new markets text", "Understand new markets"],
            [9,  "Unit 9: Companies – Lesson 3: Case Study – Presenting your company, Writing: company profile", "Company profile", "Presentation grammar", "Prepare company profile", "Present a company profile"],
            [10, "Working Across Cultures 3: Doing Business Internationally", "International business, Cultures", "Cross-cultural communication", "Research international business", "Understand international business"],
            [11, "Revision C", "Review vocab Units 7–9", "Review Units 7–9 grammar", "Practice test Units 7–9", "Review Units 7–9"],
            [12, "Unit 10: Communication – Lesson 1: Do a communications quiz", "Communication, Social media", "Future with will", "Write communication diary", "Communicate future plans"],
            [13, "Unit 10: Communication – Lesson 2: Listening & Reading (Interview, Facebook article)", "Future plans", "Arrangements", "Future plan writing", "Understand social media articles"],
            [14, "Unit 10: Communication – Lesson 3: Case Study – Blakelock Engineering, Writing: email", "Arrangements, Company issues", "Formal writing", "Email to manager", "Handle arrangements"],
            [15, "Unit 11: Cultures – Lesson 1: Look at tips for doing business in another country", "Cultural mistakes, Differences", "should/shouldn’t, could/would", "List cultural mistakes", "Identify cultural mistakes"],
            [16, "Unit 11: Cultures – Lesson 2: Listening & Reading (Cultural mistakes, Lessons in cultural difference)", "Company cultures", "Cultural expressions", "Write cultural reflection", "Understand cultural lessons"],
            [17, "Unit 11: Cultures – Lesson 3: Case Study – The wind of change, Writing: action minutes", "Change management", "Action minutes", "Minutes of meeting", "Assess company change"],
            [18, "Unit 12: Jobs – Lesson 1: Discuss jobs", "Jobs, Networking", "Present perfect, Past simple vs present perfect", "Describe skills", "Discuss jobs"],
            [19, "Unit 12: Jobs – Lesson 2: Listening & Reading (Interview, Networking profile)", "Skills, Abilities", "Describing skills", "Summarize job profile", "Understand networking profiles"],
            [20, "Unit 12: Jobs – Lesson 3: Case Study – Nelson & Harper Inc., Writing: letter", "Job interviews, Letters", "Letter writing structures", "Write job application letter", "Prepare for job interviews"],
            [21, "Working Across Cultures 4: Team Working", "Teamwork, Collaboration", "Teamwork grammar", "Group teamwork activity", "Collaborate in teamwork"],
            [22, "Revision D", "Review vocab Units 10–12", "Review Units 10–12 grammar", "Practice test Units 10–12", "Review Units 10–12"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 7–12", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Company theme)", "Presentation language", "Presentation connectors", "Prepare group presentation", "Present project"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 9 ==========
        $subject = Subject::where('name', 'ICY Communication 9')->first();

        $lessons = [
            [1,  "Unit 1: Careers – Lesson 1: Talk about your career plan", "Career, Jobs", "Modals 1: ability, requests, offers", "Write about career plan", "Discuss career plans"],
            [2,  "Unit 1: Careers – Lesson 2: Listening & Reading (Interview with Finance Director, Facebook profile)", "Finance, Job prospects", "Career grammar", "Summarize Facebook text", "Understand interviews"],
            [3,  "Unit 1: Careers – Lesson 3: Case Study – YouJuice: Job candidate decision, Writing: email", "Recruitment, Emails", "Email writing format", "Write job application email", "Write job-related emails"],
            [4,  "Unit 2: Companies – Lesson 1: Talk about companies", "Companies, CEOs", "Present simple & present continuous", "Company research", "Describe companies"],
            [5,  "Unit 2: Companies – Lesson 2: Listening & Reading (CEO search, Best companies)", "Corporate culture, Industries", "Describing companies", "Summarize article", "Understand articles"],
            [6,  "Unit 2: Companies – Lesson 3: Case Study – Dino Conti Ice Cream: Investment decision, Writing: proposal", "Proposal terms", "Proposal writing structures", "Write investment proposal", "Write proposals"],
            [7,  "Unit 3: Selling – Lesson 1: Talk about shopping habits", "Shopping, Sales", "Modals 2: must, need to, have to, should", "Write shopping diary", "Discuss shopping habits"],
            [8,  "Unit 3: Selling – Lesson 2: Listening & Reading (Interview with Marketing Director, Women in sales)", "Marketing, Surveys", "Sales-related grammar", "Summarize sales survey", "Understand marketing surveys"],
            [9,  "Unit 3: Selling – Lesson 3: Case Study – Partnership agreement, Writing: letter", "Partnership, Letters", "Letter writing forms", "Write partnership letter", "Write partnership letters"],
            [10, "Working Across Cultures 1: Saying 'No' Politely", "Cultural politeness", "Politeness expressions", "Research politeness", "Understand politeness"],
            [11, "Revision A", "Review vocab Units 1–3", "Review Units 1–3 grammar", "Practice test Units 1–3", "Review Units 1–3"],
            [12, "Unit 4: Great Ideas – Lesson 1: Discuss what makes a great idea", "Ideas, Creativity", "Verb & noun combinations", "Describe a great idea", "Discuss ideas"],
            [13, "Unit 4: Great Ideas – Lesson 2: Listening & Reading (Researcher, Translators, Safer cycling, Going for gold)", "Research, Innovation", "Past simple & past continuous", "Summarize research articles", "Understand research texts"],
            [14, "Unit 4: Great Ideas – Lesson 3: Case Study – New attraction idea, Writing: report", "Attractions, Reports", "Report writing grammar", "Write attraction report", "Write reports"],
            [15, "Unit 5: Stress – Lesson 1: Discuss stressful situations and activities", "Stress, Workplace", "Past simple & present perfect", "List stressful activities", "Discuss stress"],
            [16, "Unit 5: Stress – Lesson 2: Listening & Reading (Interview with Director, Over half stressed owners)", "Health, Consultancy", "Stress vocabulary", "Summarize stress article", "Understand stress articles"],
            [17, "Unit 5: Stress – Lesson 3: Case Study – Davies-Miller Advertising, Writing: report", "Advertising, Stress reduction", "Report grammar", "Write stress report", "Write company reports"],
            [18, "Unit 6: Entertaining – Lesson 1: Discuss corporate entertaining", "Entertainment, Events", "Multiword verbs", "Plan a corporate event", "Discuss entertaining"],
            [19, "Unit 6: Entertaining – Lesson 2: Listening & Reading (CEO interview, Entertainment experts)", "Corporate, Hospitality", "Present continuous", "Summarize interviews", "Understand CEO interviews"],
            [20, "Unit 6: Entertaining – Lesson 3: Case Study – Organising a conference, Writing: email", "Conferences, Emails", "Email format", "Write conference email", "Write emails"],
            [21, "Working Across Cultures 2: Doing Business Internationally", "International business", "International communication grammar", "Compare business practices", "Understand business cultures"],
            [22, "Revision B", "Review vocab Units 4–6", "Review Units 4–6 grammar", "Practice test Units 4–6", "Review Units 4–6"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 1–6", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Business Idea theme)", "Presentation language", "Presentation connectors", "Prepare presentation", "Present in English"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 10 ==========
        $subject = Subject::where('name', 'ICY Communication 10')->first();

        $lessons = [
            [1,  "Unit 7: New Business – Lesson 1: Discuss new businesses and business sectors", "Business, Sectors", "Economic terms, Time clauses", "Write about new business idea", "Discuss new businesses"],
            [2,  "Unit 7: New Business – Lesson 2: Listening & Reading (Interviews with CEOs, Internet whiz-kid, Exports)", "CEOs, Exports", "Business grammar", "Summarize CEO text", "Understand CEO interviews"],
            [3,  "Unit 7: New Business – Lesson 3: Case Study – Taka Shimizu Cycles: Factory location decision, Writing: email", "Factories, Emails", "Email writing format", "Write factory location email", "Write business emails"],
            [4,  "Unit 8: Marketing – Lesson 1: Talk about marketing mix and campaigns", "Marketing mix, Campaigns", "Word partnerships, Questions", "Do marketing quiz", "Discuss marketing mix"],
            [5,  "Unit 8: Marketing – Lesson 2: Listening & Reading (Interview with Marketing Manager, Adidas targets China)", "Adidas, Global markets", "Marketing language", "Summarize Adidas article", "Understand global marketing"],
            [6,  "Unit 8: Marketing – Lesson 3: Case Study – Wincote International: Outdoor sales plan, Writing: email", "Plans, Emails", "Email structures", "Write marketing email", "Write marketing emails"],
            [7,  "Unit 9: Planning – Lesson 1: Discuss how and when to plan", "Planning, Strategies", "Future plans, Planning grammar", "Plan a project", "Discuss planning"],
            [8,  "Unit 9: Planning – Lesson 2: Listening & Reading (Interview with consultant, When there’s no Plan A)", "Consultants, Future plans", "Future tenses", "Summarize planning text", "Understand planning texts"],
            [9,  "Unit 9: Planning – Lesson 3: Case Study – European Press and Media: Magazine issue plan, Writing: letter", "Magazine issues, Letters", "Letter writing forms", "Write magazine letter", "Write letters"],
            [10, "Working Across Cultures 3: International Conference Calls", "Conference calls, Cultures", "Conference communication", "Research conference calls", "Handle conference calls"],
            [11, "Revision C", "Review vocab Units 7–9", "Review Units 7–9 grammar", "Practice test Units 7–9", "Review Units 7–9"],
            [12, "Unit 10: Managing People – Lesson 1: Discuss qualities of a good manager", "Managers, Leadership", "Verbs & prepositions, Reported speech", "List manager qualities", "Discuss management"],
            [13, "Unit 10: Managing People – Lesson 2: Listening & Reading (Management book, Share the power)", "Management books, Power", "Leadership grammar", "Summarize leadership text", "Understand leadership texts"],
            [14, "Unit 10: Managing People – Lesson 3: Case Study – Ashley Cooper Search: Improve staff relations, Writing: report", "Reports, Staff relations", "Report grammar", "Write staff relations report", "Write staff reports"],
            [15, "Unit 11: Conflict – Lesson 1: Do a quiz on managing conflict", "Conflict, Resolution", "Conditionals, Word-building", "Conflict quiz", "Understand conflict"],
            [16, "Unit 11: Conflict – Lesson 2: Listening & Reading (Interview with expert, Conflict intervention)", "Dispute experts, Interventions", "Conflict grammar", "Summarize conflict article", "Analyze conflict texts"],
            [17, "Unit 11: Conflict – Lesson 3: Case Study – Herman & Corrie Teas: Buy-out decision, Writing: letter", "Buy-out offers, Letters", "Letter grammar", "Write buy-out letter", "Write conflict letters"],
            [18, "Unit 12: Products – Lesson 1: Discuss products", "Products, Innovation", "Passives, Product descriptions", "Describe product", "Discuss products"],
            [19, "Unit 12: Products – Lesson 2: Listening & Reading (Editor interview, Innovation path)", "Editors, Competitions", "Innovation grammar", "Summarize innovation article", "Understand innovation texts"],
            [20, "Unit 12: Products – Lesson 3: Case Study – George Marshall Awards: Product innovation, Writing: report", "Reports, Presentations", "Report structures", "Write product report", "Write product reports"],
            [21, "Working Across Cultures 4: Preparing to Do Business Internationally", "International business", "International grammar", "Compare international practices", "Do international business"],
            [22, "Revision D", "Review vocab Units 10–12", "Review Units 10–12 grammar", "Practice test Units 10–12", "Review Units 10–12"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 7–12", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Business/Marketing theme)", "Presentation language", "Presentation connectors", "Prepare presentation", "Present projects"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 1 ==========
        $ielts1 = Subject::where('name', 'ICY IELTS 1')->first();

        $lessons_ielts1 = [
            [1, 'Unit 1: Daily Life – Lesson 1: Lead-in & Vocabulary', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [2, 'Unit 1: Daily Life – Lesson 2: Grammar & Practice', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [3, 'Unit 1: Daily Life – Lesson 3: Reading & Listening', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [4, 'Unit 1: Daily Life – Lesson 4: Speaking & Writing', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [5, 'Unit 2: House and Home – Lesson 1: Lead-in & Vocabulary', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [6, 'Unit 2: House and Home – Lesson 2: Grammar & Practice', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [7, 'Unit 2: House and Home – Lesson 3: Reading & Listening', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [8, 'Unit 2: House and Home – Lesson 4: Speaking & Writing', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [9, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 1: Lead-in & Vocabulary', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [10, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 2: Grammar & Practice', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [11, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 3: Reading & Listening', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [12, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 4: Speaking & Writing', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [13, 'Mid-term Test', '-', '-', 'Written & oral test (Units 1–3)', 'Students can demonstrate integrated mastery of vocabulary, grammar, reading, listening, speaking, and writing skills from Units 1–3.'],
            [14, 'Unit 4: Travel and Holidays – Lesson 1: Lead-in & Vocabulary', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [15, 'Unit 4: Travel and Holidays – Lesson 2: Grammar & Practice', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [16, 'Unit 4: Travel and Holidays – Lesson 3: Reading & Listening', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [17, 'Unit 4: Travel and Holidays – Lesson 4: Speaking & Writing', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [18, 'Unit 5: Food – Lesson 1: Lead-in & Vocabulary', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [19, 'Unit 5: Food – Lesson 2: Grammar & Practice', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [20, 'Project-based Learning 1', 'Integrated vocabulary', 'Integrated grammar', 'Group poster/project about Units 1–3', 'Students can collaborate in groups to design posters, conduct peer teaching, and present integrated knowledge from Units 1–3.'],
            [21, 'Unit 5: Food – Lesson 3: Reading & Listening', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [22, 'Project-based Learning 2', 'Integrated vocabulary', 'Integrated grammar', 'Group presentation about Units 4–5', 'Students can develop problem-solving, presentation, and public speaking skills by synthesizing knowledge from Units 4–5.'],
            [23, 'Unit 5: Food – Lesson 4: Speaking & Writing', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [24, 'Final Test', '-', '-', 'Written & oral test (Units 4–5)', 'Students can demonstrate readiness for higher-level IELTS practice by integrating all 4 skills and grammar/vocabulary knowledge from Units 4–5.'],
        ];

        foreach ($lessons_ielts1 as $lesson) {
            $ielts1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 2 ==========
        $ielts2 = Subject::where('name', 'ICY IELTS 2')->first();

        $lessons_ielts2 = [
            [1, 'Unit 6: Transport and Places in Town – Lesson 1: Lead-in & Vocabulary', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [2, 'Unit 6: Transport and Places in Town – Lesson 2: Grammar & Practice', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [3, 'Unit 6: Transport and Places in Town – Lesson 3: Reading & Listening', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [4, 'Unit 6: Transport and Places in Town – Lesson 4: Speaking & Writing', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [5, 'Unit 7: Jobs, Work and Study – Lesson 1: Lead-in & Vocabulary', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [6, 'Unit 7: Jobs, Work and Study – Lesson 2: Grammar & Practice', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [7, 'Unit 7: Jobs, Work and Study – Lesson 3: Reading & Listening', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [8, 'Unit 7: Jobs, Work and Study – Lesson 4: Speaking & Writing', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [9, 'Unit 8: Food and Healthy Living – Lesson 1: Lead-in & Vocabulary', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [10, 'Unit 8: Food and Healthy Living – Lesson 2: Grammar & Practice', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [11, 'Unit 8: Food and Healthy Living – Lesson 3: Reading & Listening', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [12, 'Unit 8: Food and Healthy Living – Lesson 4: Speaking & Writing', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [13, 'Mid-term Test', '-', '-', 'Written & oral test (Units 6–8)', 'Students demonstrate mastery of Units 6–8'],
            [14, 'Unit 9: Environment and Nature – Lesson 1: Lead-in & Vocabulary', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [15, 'Unit 9: Environment and Nature – Lesson 2: Grammar & Practice', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [16, 'Unit 9: Environment and Nature – Lesson 3: Reading & Listening', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [17, 'Unit 9: Environment and Nature – Lesson 4: Speaking & Writing', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [18, 'Unit 10: Education and Learning – Lesson 1: Lead-in & Vocabulary', 'School and education vocabulary', 'Gerunds and infinitives', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [19, 'Unit 10: Education and Learning – Lesson 2: Grammar & Practice', 'School and education vocabulary', 'Gerunds and infinitives', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [20, 'Unit 10: Education and Learning – Lesson 3: Reading & Listening', 'School and education vocabulary', 'Gerunds and infinitives', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [21, 'Unit 10: Education and Learning – Lesson 4: Speaking & Writing', 'School and education vocabulary', 'Gerunds and infinitives', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [22, 'Project-based Learning: IELTS Poster Project', 'Integrated review vocabulary', 'Integrated review grammar', 'Create and present a project poster', 'Students can apply knowledge creatively in a real-life context'],
            [23, 'Review & Consolidation', 'Review vocabulary from Units 6–10', 'Review grammar from Units 6–10', 'Complete group quiz + discussion', 'Students consolidate knowledge and skills from previous units'],
            [24, 'Final Test', '-', '-', 'Written & oral test (Units 6–10)', 'Students demonstrate mastery of Units 6–10'],
        ];

        foreach ($lessons_ielts2 as $lesson) {
            $ielts2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 3 ==========
        $ielts3 = Subject::where('name', 'ICY IELTS 3')->first();

        $lessons_ielts3 = [
            [1, 'Unit 1: Relationships – Reading', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [2, 'Unit 1: Relationships – Writing', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [3, 'Unit 1: Relationships – Listening', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [4, 'Unit 1: Relationships – Speaking', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [5, 'Review 1: Relationships', 'Vocabulary from Unit 1', 'Grammar from Unit 1', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [6, 'Unit 2: Places and Buildings – Reading', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [7, 'Unit 2: Places and Buildings – Writing', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [8, 'Unit 2: Places and Buildings – Listening', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [9, 'Unit 2: Places and Buildings – Speaking', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [10, 'Review 2: Places and Buildings', 'Vocabulary from Unit 2', 'Grammar from Unit 2', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [11, 'Unit 3: Education and Employment – Reading', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [12, 'Mid-term Test', '-', '-', 'Written & oral test (Units 1–2)', 'Students can integrate skills and knowledge from Units 1–2 in test format.'],
            [13, 'Unit 3: Education and Employment – Writing', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [14, 'Unit 3: Education and Employment – Listening', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [15, 'Unit 3: Education and Employment – Speaking', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [16, 'Review 3: Education and Employment', 'Vocabulary from Unit 3', 'Grammar from Unit 3', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [17, 'Unit 4: Food and Drink – Reading', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [18, 'Unit 4: Food and Drink – Writing', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [19, 'Unit 4: Food and Drink – Listening', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [20, 'Unit 4: Food and Drink – Speaking', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [21, 'Review 4: Food and Drink', 'Vocabulary from Unit 4', 'Grammar from Unit 4', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [22, 'IELTS Integrated Practice 1', 'Review Units 1–2', 'Grammar consolidation', 'Simulated IELTS test practice (mixed skills)', 'Students can apply integrated IELTS skills in test-like conditions.'],
            [23, 'IELTS Integrated Practice 2', 'Review Units 3–4', 'Grammar consolidation', 'Simulated IELTS test practice (mixed skills)', 'Students can apply integrated IELTS skills in test-like conditions.'],
            [24, 'Final Test', '-', '-', 'Written & oral test (Units 3–4)', 'Students can integrate skills and knowledge from Units 3–4 in test format.'],
        ];

        foreach ($lessons_ielts3 as $lesson) {
            $ielts3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 4 ==========
        $ielts4 = Subject::where('name', 'ICY IELTS 4')->first();

        $lessons_ielts4 = [
            [1, "Unit 5: Consumerism – Reading", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [2, "Unit 5: Consumerism – Writing", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [3, "Unit 5: Consumerism – Listening", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [4, "Unit 5: Consumerism – Speaking", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [5, "Review 5: Consumerism", "Vocabulary from Unit 5", "Grammar from Unit 5", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 5"],
            [6, "Unit 6: Leisure Time – Reading", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [7, "Unit 6: Leisure Time – Writing", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [8, "Unit 6: Leisure Time – Listening", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [9, "Unit 6: Leisure Time – Speaking", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [10, "Review 6: Leisure Time", "Vocabulary from Unit 6", "Grammar from Unit 6", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 6"],
            [11, "Mid-term Test", "-", "-", "Written & oral test (Units 5–6)", "Students demonstrate mastery of Units 5–6"],
            [12, "Unit 7: Communication – Reading", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [13, "Unit 7: Communication – Writing", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [14, "Unit 7: Communication – Listening", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [15, "Unit 7: Communication – Speaking", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [16, "Review 7: Communication", "Vocabulary from Unit 7", "Grammar from Unit 7", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 7"],
            [17, "Unit 8: Global Issues – Reading", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [18, "Unit 8: Global Issues – Writing", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [19, "Unit 8: Global Issues – Listening", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [20, "Unit 8: Global Issues – Speaking", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [21, "Review 8: Global Issues", "Vocabulary from Unit 8", "Grammar from Unit 8", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 8"],
            [22, "Extensive Reading: IELTS-style passages", "Mixed-topic vocabulary", "Integrated grammar review", "Read long-form texts + answer comprehension + vocabulary tasks", "Students can apply reading strategies to long-form IELTS passages"],
            [23, "Consolidation & Sharing", "Mixed-topic vocabulary", "Integrated grammar review", "Speaking presentations + peer feedback", "Students can integrate and present knowledge across topics"],
            [24, "Final Test", "-", "-", "Full IELTS 4 skills test", "Students demonstrate mastery of Units 5–8"],
        ];

        foreach ($lessons_ielts4 as $lesson) {
            $ielts4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 5 ==========
        $ielts5 = Subject::where('name', 'ICY Ielts 5')->first();

        $lessons_ielts5 = [
            [1, "Unit 1: The Man-made Environment – Reading", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can apply scanning/skimming strategies to locate information"],
            [2, "Unit 1: The Man-made Environment – Writing", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write essays with clear argumentation and cohesion"],
            [3, "Unit 1: The Man-made Environment – Listening", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "IELTS listening test practice + gap-fill + note completion", "Students can understand gist, detail, and recognize distractors in listening"],
            [4, "Unit 1: The Man-made Environment – Speaking", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can speak fluently and accurately on related topics"],
            [5, "Review 1: The Man-made Environment", "Vocabulary from Unit 1", "Grammar from Unit 1", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 1"],
            [6, "Unit 2: Nature and Conservation – Reading", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can infer meaning from context and locate answers"],
            [7, "Unit 2: Nature and Conservation – Writing", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write essays using cause-effect and problem-solution structures"],
            [8, "Unit 2: Nature and Conservation – Listening", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "IELTS listening test practice + gap-fill + note completion", "Students can listen for gist, specific details and take notes effectively"],
            [9, "Unit 2: Nature and Conservation – Speaking", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can discuss environmental issues using appropriate vocabulary"],
            [10, "Review 2: Nature and Conservation", "Vocabulary from Unit 2", "Grammar from Unit 2", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 2"],
            [11, "Unit 3: Science and Technology – Reading", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can identify writer’s opinion and supporting evidence"],
            [12, "Unit 3: Science and Technology – Writing", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write essays with logical flow and advanced connectors"],
            [13, "Unit 3: Science and Technology – Listening", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "IELTS listening test practice + gap-fill + note completion", "Students can understand lecture-style listening and paraphrasing"],
            [14, "Unit 3: Science and Technology – Speaking", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can present opinions clearly using complex sentence forms"],
            [15, "Review 3: Science and Technology", "Vocabulary from Unit 3", "Grammar from Unit 3", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 3"],
            [16, "Unit 4: Culture and Society – Reading", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can recognize writer attitude and tone"],
            [17, "Unit 4: Culture and Society – Writing", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write persuasive essays using relevant examples"],
            [18, "Unit 4: Culture and Society – Listening", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "IELTS listening test practice + gap-fill + note completion", "Students can identify main ideas and supporting details from recordings"],
            [19, "Unit 4: Culture and Society – Speaking", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can speak about culture confidently with appropriate vocabulary"],
            [20, "Review 4: Culture and Society", "Vocabulary from Unit 4", "Grammar from Unit 4", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 4"],
            [21, "Mid-term Test", "-", "-", "Written & oral test (Units 1–2)", "Students demonstrate mastery of Units 1–2"],
            [22, "Project-based Learning: Environment Poster", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Project-based Learning: Culture Exhibition", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–4)", "Students demonstrate mastery of Units 1–4"],
        ];

        foreach ($lessons_ielts5 as $lesson) {
            $ielts5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 6 ==========
        $ielts6 = Subject::where('name', 'ICY Ielts 6')->first();

        $lessons_ielts6 = [
            [1, "Unit 5: Business and Work – Reading", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [2, "Unit 5: Business and Work – Writing", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [3, "Unit 5: Business and Work – Listening", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [4, "Unit 5: Business and Work – Speaking", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [5, "Review 5: Business and Work", "Vocabulary from Unit 5", "Grammar from Unit 5", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [6, "Unit 6: The Natural Environment – Reading", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [7, "Unit 6: The Natural Environment – Writing", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [8, "Unit 6: The Natural Environment – Listening", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [9, "Unit 6: The Natural Environment – Speaking", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [10, "Review 6: The Natural Environment", "Vocabulary from Unit 6", "Grammar from Unit 6", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [11, "Unit 7: Education Systems – Reading", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [12, "Mid-term Test", "-", "-", "Written & oral test (Units 5–6)", "Students can demonstrate mastery of Units 5–6 in IELTS-style test."],
            [13, "Unit 7: Education Systems – Writing", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [14, "Unit 7: Education Systems – Listening", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [15, "Unit 7: Education Systems – Speaking", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [16, "Review 7: Education Systems", "Vocabulary from Unit 7", "Grammar from Unit 7", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [17, "Unit 8: Festivals and Traditions – Reading", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [18, "Unit 8: Festivals and Traditions – Writing", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [19, "Unit 8: Festivals and Traditions – Listening", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [20, "Unit 8: Festivals and Traditions – Speaking", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [21, "Review 8: Festivals and Traditions", "Vocabulary from Unit 8", "Grammar from Unit 8", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [22, "IELTS Integrated Practice 1", "Review Units 5–6", "Grammar consolidation", "Full IELTS practice session with mixed skills", "Students can apply integrated IELTS skills in exam-like practice."],
            [23, "IELTS Integrated Practice 2", "Review Units 7–8", "Grammar consolidation", "Full IELTS practice session with mixed skills", "Students can apply integrated IELTS skills in exam-like practice."],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–8)", "Students can demonstrate mastery of Units 7–8 in IELTS-style test."],
        ];

        foreach ($lessons_ielts6 as $lesson) {
            $ielts6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 7 ==========
        $ielts7 = Subject::where('name', 'ICY Ielts 7')->first();

        $lessons_ielts7 = [
            [1, "Unit 1: Urban and Rural Life – Reading", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [2, "Unit 1: Urban and Rural Life – Writing", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [3, "Unit 1: Urban and Rural Life – Listening", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [4, "Unit 1: Urban and Rural Life – Speaking", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [5, "Review 1: Urban and Rural Life", "Vocabulary from Unit 1", "Grammar from Unit 1", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [6, "Unit 2: Health – Reading", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [7, "Unit 2: Health – Writing", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [8, "Unit 2: Health – Listening", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [9, "Unit 2: Health – Speaking", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [10, "Review 2: Health", "Vocabulary from Unit 2", "Grammar from Unit 2", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [11, "Unit 3: Art and Architecture – Reading", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [12, "Mid-term Test", "-", "-", "Written & oral test (Units 1–2)", "Students can demonstrate mastery of Units 1–2 in IELTS-style test."],
            [13, "Unit 3: Art and Architecture – Writing", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [14, "Unit 3: Art and Architecture – Listening", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [15, "Unit 3: Art and Architecture – Speaking", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [16, "Review 3: Art and Architecture", "Vocabulary from Unit 3", "Grammar from Unit 3", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [17, "Unit 4: Finance and Business – Reading", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [18, "Unit 4: Finance and Business – Writing", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [19, "Unit 4: Finance and Business – Listening", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [20, "Unit 4: Finance and Business – Speaking", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [21, "IELTS Integrated Practice 1", "Review Units 1–2", "Grammar consolidation", "IELTS practice with mixed tasks and time management focus", "Students can apply integrated IELTS skills under exam-like conditions."],
            [22, "IELTS Integrated Practice 2", "Review Units 3–4", "Grammar consolidation", "IELTS practice with mixed tasks and time management focus", "Students can apply integrated IELTS skills under exam-like conditions."],
            [23, "Review 4: Finance and Business", "Vocabulary from Unit 4", "Grammar from Unit 4", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [24, "Final Test", "-", "-", "Written & oral test (Units 3–4)", "Students can demonstrate mastery of Units 3–4 in IELTS-style test."],
        ];

        foreach ($lessons_ielts7 as $lesson) {
            $ielts7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 8 ==========
        $ielts8 = Subject::where('name', 'ICY IELTS 8')->first();

        $lessons_ielts8 = [
            [1, "Unit 5: History – Reading", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [2, "Unit 5: History – Writing", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [3, "Unit 5: History – Listening", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [4, "Unit 5: History – Speaking", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [5, "Review 5: History", "Vocabulary from Unit 5", "Grammar from Unit 5", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [6, "Unit 6: Science and Technology – Reading", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [7, "Unit 6: Science and Technology – Writing", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [8, "Unit 6: Science and Technology – Listening", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [9, "Unit 6: Science and Technology – Speaking", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [10, "Review 6: Science and Technology", "Vocabulary from Unit 6", "Grammar from Unit 6", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [11, "Unit 7: Television, News and Current Affairs – Reading", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [12, "Mid-term Test", "-", "-", "Written & oral test (Units 5–6)", "Students can demonstrate mastery of Units 5–6 in an IELTS-style test."],
            [13, "Unit 7: Television, News and Current Affairs – Writing", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [14, "Unit 7: Television, News and Current Affairs – Listening", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [15, "Unit 7: Television, News and Current Affairs – Speaking", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [16, "Review 7: Television, News and Current Affairs", "Vocabulary from Unit 7", "Grammar from Unit 7", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [17, "Unit 8: Culture – Reading", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [18, "Unit 8: Culture – Writing", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [19, "Unit 8: Culture – Listening", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [20, "Unit 8: Culture – Speaking", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [21, "Review 8: Culture", "Vocabulary from Unit 8", "Grammar from Unit 8", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [22, "IELTS Integrated Practice 1", "Review Units 5–6", "Grammar consolidation", "IELTS integrated practice: timed exam simulation", "Students can integrate all IELTS skills in a timed test-like environment."],
            [23, "IELTS Integrated Practice 2", "Review Units 7–8", "Grammar consolidation", "IELTS integrated practice: timed exam simulation", "Students can integrate all IELTS skills in a timed test-like environment."],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–8)", "Students can demonstrate mastery of Units 7–8 in an IELTS-style test."],
        ];

        foreach ($lessons_ielts8 as $lesson) {
            $ielts8->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 1 ==========
        $business1 = Subject::where('name', 'ICY Business 1')->first();

        $lessons_business1 = [
            [1,  "Unit 1: Introductions and Names – Lesson 1", "Business greetings, introductions", "Present simple", "Role-play business introductions", "Students can introduce themselves professionally"],
            [2,  "Unit 1: Introductions and Names – Lesson 2", "Job titles, departments", "Present simple", "Interview a classmate about their role", "Students can ask and answer about roles/departments"],
            [3,  "Unit 2: Describing People – Lesson 1", "Physical appearance, personality traits", "Adjectives, verb to be", "Describe a coworker in pairs", "Students can describe people accurately"],
            [4,  "Unit 2: Describing People – Lesson 2", "Strengths & weaknesses vocabulary", "Comparatives & superlatives", "Group ranking activity", "Students can compare and evaluate people"],
            [5,  "Unit 3: Clothes – Lesson 1", "Clothing and dress codes", "Countable/uncountable nouns", "Discuss dress code at work", "Students can talk about appropriate work clothes"],
            [6,  "Unit 3: Clothes – Lesson 2", "Shopping and style", "Present continuous", "Create an outfit proposal", "Students can describe clothing and style choices"],
            [7,  "Unit 4: Routines – Lesson 1", "Daily routines, work schedule", "Adverbs of frequency", "Write and present daily routine", "Students can talk about work routines"],
            [8,  "Unit 4: Routines – Lesson 2", "Meetings and schedules", "Time expressions", "Plan a weekly schedule in groups", "Students can organize and describe schedules"],
            [9,  "Unit 5: Dates – Lesson 1", "Days, months, ordinal numbers", "Prepositions of time", "Set up a meeting calendar", "Students can use time expressions accurately"],
            [10, "Unit 5: Dates – Lesson 2", "Making appointments", "Future with 'will'", "Simulate booking meetings", "Students can make and confirm appointments"],
            [11, "Unit 6: Jobs – Lesson 1", "Job titles, roles", "Present simple", "Guess the job activity", "Students can describe jobs and roles"],
            [12, "Unit 6: Jobs – Lesson 2", "Workplaces and tasks", "Modal verbs: can/can’t", "Create job descriptions", "Students can talk about abilities at work"],
            [13, "Mid-term Test (Units 1–6)", "-", "-", "Written and oral test", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Favorites – Lesson 1", "Likes/dislikes vocabulary", "Like/love/hate + V-ing", "Interview peers on preferences", "Students can talk about personal preferences"],
            [15, "Unit 7: Favorites – Lesson 2", "Hobbies and free time", "Present continuous", "Create hobby posters", "Students can describe hobbies and interests"],
            [16, "Unit 8: Sports and Exercise – Lesson 1", "Sports vocabulary", "Frequency adverbs", "Plan a company sports day", "Students can talk about sports activities"],
            [17, "Unit 8: Sports and Exercise – Lesson 2", "Health & fitness vocabulary", "Have to / don’t have to", "Make a fitness plan", "Students can give advice on exercise"],
            [18, "Unit 9: Locations – Lesson 1", "Office locations, places", "There is / There are", "Draw and present office maps", "Students can describe locations"],
            [19, "Unit 9: Locations – Lesson 2", "Giving directions", "Imperatives", "Office tour role-play", "Students can give and follow directions"],
            [20, "Unit 10: The Family – Lesson 1", "Family members, relationships", "Possessive adjectives", "Family tree activity", "Students can describe family relationships"],
            [21, "Unit 11: Entertainment – Lesson 1", "Leisure activities", "Can/can’t", "Plan a team-building event", "Students can talk about entertainment preferences"],
            [22, "Unit 11: Entertainment – Lesson 2", "Making invitations", "Would like to", "Role-play invitations", "Students can invite and respond politely"],
            [23, "Review (Units 7–11)", "Vocabulary from Units 7–11", "Grammar from Units 7–11", "Quiz + team project", "Students consolidate learned language"],
            [24, "Final Test (Units 1–11)", "-", "-", "Written & oral test", "Students demonstrate mastery of all units"],
        ];

        foreach ($lessons_business1 as $lesson) {
            $business1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 2 ==========
        $business2 = Subject::where('name', 'ICY Business 2')->first();

        $lessons_business2 = [
            [1,  "Unit 1: The Weekend", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [2,  "Unit 2: City Transportation", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [3,  "Unit 4: Celebrations", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [4,  "Unit 5: Restaurants", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [5,  "Unit 6: Gifts", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [6,  "Unit 7: Air Travel", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [7,  "Unit 8: Mishaps", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [8,  "Unit 9: Jobs", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [9,  "Unit 10: Keeping Fit", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [10, "Unit 11: Invitations", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [11, "Unit 12: Campus Life", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [12, "Unit 13: Hobbies and Pastimes", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [13, "Mid-term Test", "Comprehensive vocabulary review", "Grammar consolidation (Units 1–12)", "Mid-term integrated listening and speaking test", "Assess mid-term progress in listening, grammar, and speaking fluency"],
            [14, "Unit 14: Shopping Problems", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [15, "Unit 15: Hotel Services", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [16, "Unit 16: Movies", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [17, "Unit 17: Fears", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [18, "Unit 18: Phone Messages", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [19, "Unit 19: Touring a City", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [20, "Unit 20: Airports", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [21, "Unit 21: Hotels", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [22, "Unit 22: Traffic", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [23, "Unit 23: Roommates", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [24, "Final Test", "Comprehensive vocabulary review", "Grammar consolidation (Full course)", "Final integrated listening and speaking test", "Evaluate full-course achievements and readiness for next level"],
        ];

        foreach ($lessons_business2 as $lesson) {
            $business2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 3 ==========
        $business3 = Subject::where('name', 'ICY Business 3')->first();

        $lessons_business3 = [
            [1,  "Unit 2: Plans", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [2,  "Unit 3: Successful Businesses", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [3,  "Unit 4: Apologies and Excuses", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [4,  "Unit 5: Character Traits", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [5,  "Unit 6: Travel", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [6,  "Unit 7: Housing", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [7,  "Unit 8: Can You Believe It?", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [8,  "Unit 10: Television", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [9,  "Unit 11: Cities", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [10, "Unit 12: Urban Life", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [11, "Unit 13: Special Days", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [12, "Mid-term Test", "Comprehensive vocabulary review", "Grammar consolidation (Units 2–13)", "Mid-term integrated listening and speaking test", "Assess mid-term progress in listening, grammar, and speaking fluency"],
            [13, "Unit 14: Fashion", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [14, "Unit 15: Favorites", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [15, "Unit 16: Phone Messages", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [16, "Unit 17: Past Events", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [17, "Unit 18: Vacations", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [18, "Unit 19: The News", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [19, "Unit 20: Opinions", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [20, "Unit 21: Famous People", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [21, "Unit 22: Food and Nutrition", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [22, "Unit 23: Predicaments", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [23, "Unit 24: Global Issues", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [24, "Final Test", "Comprehensive vocabulary review", "Grammar consolidation (Full course)", "Final integrated listening and speaking test", "Evaluate full-course achievements and readiness for next level"],
        ];

        foreach ($lessons_business3 as $lesson) {
            $business3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 4 ==========
        $business4 = Subject::where('name', 'ICY Business 4')->first();

        $lessons_business4 = [
            [1,  "Unit 1: Brands – Lesson 1: Talk about your favourite brands", "Brands, Products, Market", "Words with brand/product/market; Present simple & continuous", "Write about brands", "Discuss brands"],
            [2,  "Unit 1: Brands – Lesson 2: Listening & Reading (Interview with brand manager, Building luxury brands)", "Luxury, Brand manager", "Brand-related grammar", "Summarize brand article", "Understand brand articles"],
            [3,  "Unit 1: Brands – Lesson 3: Case Study – Hudson Corporation: Luggage manufacturer, Writing: email", "Email terms", "Email writing format", "Write brand protection email", "Write brand emails"],
            [4,  "Unit 2: Travel – Lesson 1: Talk about your travel experiences", "Travel, Hotels", "British & American travel words; Future forms", "Describe travel experience", "Discuss travel"],
            [5,  "Unit 2: Travel – Lesson 2: Listening & Reading (Hotel chain interview, Business travellers)", "Business travellers", "Travel grammar", "Summarize business travellers article", "Understand travel articles"],
            [6,  "Unit 2: Travel – Lesson 3: Case Study – BTS: Retain travel agent’s key client, Writing: email", "Travel emails", "Email writing structures", "Write client email", "Write travel emails"],
            [7,  "Unit 3: Change – Lesson 1: Discuss attitudes to change in general and at work", "Change, Management", "Describing change, Past simple & present perfect", "Write about change", "Discuss change"],
            [8,  "Unit 3: Change – Lesson 2: Listening & Reading (Mercedes article, Consultant interview)", "Consultants, Mergers", "Change grammar", "Summarize consultant article", "Understand consultant texts"],
            [9,  "Unit 3: Change – Lesson 3: Case Study – AcquiringAsia Entertainment: Merger problems, Writing: action minutes", "Action minutes terms", "Action minutes writing", "Write action minutes", "Write action minutes"],
            [10, "Working Across Cultures 1: Socialising", "Socialising, Networking", "Expressions for networking", "Research socialising styles", "Understand socialising"],
            [11, "Revision A", "Review vocab Units 1–3", "Review Units 1–3 grammar", "Practice test Units 1–3", "Review Units 1–3"],
            [12, "Unit 4: Organisation – Lesson 1: Talk about status within an organisation", "Organisation, Company", "Words & expressions for company structure; Noun combinations", "Describe company structure", "Discuss organisation"],
            [13, "Unit 4: Organisation – Lesson 2: Listening & Reading (Successful organisation, Management interview)", "Management roles", "Organisation grammar", "Summarize organisation article", "Understand company texts"],
            [14, "Unit 4: Organisation – Lesson 3: Case Study – InStep’s relocation: Shoe manufacturer site, Writing: email", "Relocation terms", "Formal writing", "Write relocation email", "Write relocation emails"],
            [15, "Unit 5: Advertising – Lesson 1: Discuss authentic advertisements", "Advertising, Campaigns", "Advertising expressions, Articles", "Analyze advertisements", "Discuss advertising"],
            [16, "Unit 5: Advertising – Lesson 2: Listening & Reading (New campaign article, Interview with marketing executive)", "Marketing executive", "Campaign grammar", "Summarize campaign", "Understand campaign texts"],
            [17, "Unit 5: Advertising – Lesson 3: Case Study – Alpha Advertising: Campaign development, Writing: summary", "Summary terms", "Summary structures", "Write campaign summary", "Write summaries"],
            [18, "Unit 6: Money – Lesson 1: Do a quiz and discuss attitudes to money", "Money, Finance", "Finance expressions, Trends", "Money quiz", "Discuss money"],
            [19, "Unit 6: Money – Lesson 2: Listening & Reading (Interview with investment director, Inspirational story)", "Investment, Trends", "Describing finance", "Summarize investment story", "Understand investment texts"],
            [20, "Unit 6: Money – Lesson 3: Case Study – Make your pitch: Investor idea presentation, Writing: email", "Investor emails", "Email grammar", "Write investor email", "Write investor emails"],
            [21, "Working Across Cultures 2: International Meetings", "Meetings, Cultures", "Meeting expressions", "Compare international meetings", "Discuss meetings"],
            [22, "Revision B", "Review vocab Units 4–6", "Review Units 4–6 grammar", "Practice test Units 4–6", "Review Units 4–6"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 1–6", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Marketing/Branding theme)", "Presentation language", "Presentation connectors", "Prepare group presentation", "Present projects"],
        ];

        foreach ($lessons_business4 as $lesson) {
            $business4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 5 ==========
        $business5 = Subject::where('name', 'ICY Business 5')->first();

        $lessons_business5 = [
            [1,  "Unit 7: Cultures – Lesson 1: Discuss importance of cultural awareness in business", "Culture, Awareness, Relationships", "Idioms for relationships, Advice/obligation/necessity", "Write about cultural awareness", "Discuss cultural awareness"],
            [2,  "Unit 7: Cultures – Lesson 2: Listening & Reading (Interview with cultural trainer, Culture shock article)", "Culture shock, Trainers", "Social English grammar", "Summarize culture shock article", "Understand culture shock"],
            [3,  "Unit 7: Cultures – Lesson 3: Case Study – Business culture briefing: Prepare a talk, Writing: report", "Business culture, Reports", "Report writing", "Write business culture report", "Write reports"],
            [4,  "Unit 8: Human Resources – Lesson 1: Talk about job interviews", "Job interviews, Applications", "Expressions for applications, -ing forms & infinitives", "Prepare for job interview", "Discuss interviews"],
            [5,  "Unit 8: Human Resources – Lesson 2: Listening & Reading (Women at work, Interview with recruitment specialist)", "Recruitment, Specialists", "Recruitment grammar", "Summarize women at work text", "Understand recruitment texts"],
            [6,  "Unit 8: Human Resources – Lesson 3: Case Study – Fast Fitness: New manager hiring, Writing: letter", "Hiring, Letters", "Letter structures", "Write manager hiring letter", "Write letters"],
            [7,  "Unit 9: International Markets – Lesson 1: Discuss development of international markets", "Markets, Trade, Negotiations", "Free trade vocabulary, Conditionals", "Research international markets", "Discuss markets"],
            [8,  "Unit 9: International Markets – Lesson 2: Listening & Reading (China–US trade, Expert on negotiations)", "Exports, Conditions", "Negotiation grammar", "Summarize trade article", "Understand trade texts"],
            [9,  "Unit 9: International Markets – Lesson 3: Case Study – Pampas Leather: Negotiate a deal, Writing: email", "Deals, Emails", "Email writing forms", "Write negotiation email", "Write emails"],
            [10, "Working Across Cultures 3: Doing Business Internationally", "International business", "International grammar", "Compare cultures", "Understand international business"],
            [11, "Revision C", "Review vocab Units 7–9", "Review Units 7–9 grammar", "Practice test Units 7–9", "Review Units 7–9"],
            [12, "Unit 10: Ethics – Lesson 1: Discuss ethics at work", "Ethics, Résumés", "Describing illegal behaviour, Narrative tenses", "List ethical dilemmas", "Discuss ethics"],
            [13, "Unit 10: Ethics – Lesson 2: Listening & Reading (Résumé ethics, Interview with environmental director)", "Illegal/unethical behaviour, Organisations", "Work ethics grammar", "Summarize résumé ethics text", "Understand ethics texts"],
            [14, "Unit 10: Ethics – Lesson 3: Case Study – Principles or profit?: Ethical dilemmas, Writing: report", "Ethical dilemmas, Reports", "Report grammar", "Write ethics report", "Write ethics reports"],
            [15, "Unit 11: Leadership – Lesson 1: Discuss qualities of good leadership", "Leadership, Character", "Relative clauses, Character description", "Describe good leadership", "Discuss leadership"],
            [16, "Unit 11: Leadership – Lesson 2: Listening & Reading (Interview with recruitment director, Leading L’Oréal)", "Executives, Clauses", "Leadership grammar", "Summarize L’Oréal article", "Understand leadership texts"],
            [17, "Unit 11: Leadership – Lesson 3: Case Study – Lina Sports: Best leader decision, Writing: email", "Sportswear leadership, Emails", "Email grammar", "Write leadership email", "Write leadership emails"],
            [18, "Unit 12: Competition – Lesson 1: Do a quiz on competitiveness", "Competition, Sports idioms", "Passives, Sports idioms", "Do competition quiz", "Discuss competition"],
            [19, "Unit 12: Competition – Lesson 2: Listening & Reading (Head to head competition, Interview with Competition Commission)", "Head-to-head, Passives", "Competition grammar", "Summarize competition article", "Understand competition texts"],
            [20, "Unit 12: Competition – Lesson 3: Case Study – Fashion House: Negotiate contracts, Writing: email", "Contracts, Suppliers, Emails", "Contract email grammar", "Write contract negotiation email", "Write contract emails"],
            [21, "Working Across Cultures 4: Communication Styles", "Communication styles", "Cross-cultural grammar", "Compare communication styles", "Discuss communication styles"],
            [22, "Revision D", "Review vocab Units 10–12", "Review Units 10–12 grammar", "Practice test Units 10–12", "Review Units 10–12"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 7–12", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Leadership/Competition theme)", "Presentation language", "Presentation connectors", "Prepare presentation", "Present projects"],
        ];

        foreach ($lessons_business5 as $lesson) {
            $business5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 6 ==========
        $business6 = Subject::where('name', 'ICY Business 6')->first();

        $lessons_business6 = [
            [1,  "Unit 1: Communication – Lesson 1: Talk about what makes a good communicator", "Communication, Idioms", "Idioms, Communication breakdown", "Write about good communicators", "Discuss communication"],
            [2,  "Unit 1: Communication – Lesson 2: Listening & Reading (Interview with expert, A quiet word article)", "Good communicators, Emails", "Email grammar", "Summarize article", "Understand communication texts"],
            [3,  "Unit 1: Communication – Lesson 3: Case Study – The price of success: Improve communications, Writing: email", "Report terms", "Report writing structures", "Write improvement email", "Write improvement emails"],
            [4,  "Unit 2: International Marketing – Lesson 1: Talk about international brands", "Marketing, Brands", "Marketing word partnerships, Noun compounds", "Research global brands", "Discuss international marketing"],
            [5,  "Unit 2: International Marketing – Lesson 2: Listening & Reading (Diego Della Valle, Interview with marketing professor & CEO)", "Noun compounds, Partnerships", "Marketing grammar", "Summarize marketing article", "Understand marketing texts"],
            [6,  "Unit 2: International Marketing – Lesson 3: Case Study – Henri-Claude Cosmetics: TV commercial, Writing: action minutes", "Action minutes", "Action minutes", "Write action minutes", "Write action minutes"],
            [7,  "Unit 3: Building Relationships – Lesson 1: Talk about building relationships", "Relationships, CSR", "Describing relations, Multiword verbs", "Write about relationships", "Discuss relationships"],
            [8,  "Unit 3: Building Relationships – Lesson 2: Listening & Reading (Head of CSR interview, How East is meeting West)", "East-West business", "Networking grammar", "Summarize CSR article", "Understand CSR texts"],
            [9,  "Unit 3: Building Relationships – Lesson 3: Case Study – Al-Munir Hotel: Customer satisfaction plan, Writing: letter", "Customer satisfaction, Letters", "Letter grammar", "Write satisfaction letter", "Write satisfaction letters"],
            [10, "Working Across Cultures 1: Doing Business Internationally", "Cross-cultural business", "Cross-cultural grammar", "Compare international business", "Understand international business"],
            [11, "Revision A", "Review vocab Units 1–3", "Review Units 1–3 grammar", "Practice test Units 1–3", "Review Units 1–3"],
            [12, "Unit 4: Success – Lesson 1: Discuss what makes people/companies successful", "Success, Profiles", "Prefixes, Present & past tenses", "Write about success factors", "Discuss success"],
            [13, "Unit 4: Success – Lesson 2: Listening & Reading (Interview with MD, Profile of Carlos Slim)", "Business leaders, Companies", "Success grammar", "Summarize Carlos Slim article", "Understand leader profiles"],
            [14, "Unit 4: Success – Lesson 3: Case Study – Kensington United: Sponsorship negotiation, Writing: press release/letter", "Press releases, Sponsorships", "Press release writing", "Write sponsorship press release", "Write press releases"],
            [15, "Unit 5: Job Satisfaction – Lesson 1: Discuss motivational factors and do a quiz", "Motivation, Job satisfaction", "Synonyms, Word-building, Passives", "Job satisfaction quiz", "Discuss job satisfaction"],
            [16, "Unit 5: Job Satisfaction – Lesson 2: Listening & Reading (Interview with HR Director, Marriott Hotels article)", "Hotels, HR", "HR grammar", "Summarize hotel article", "Understand HR texts"],
            [17, "Unit 5: Job Satisfaction – Lesson 3: Case Study – Just good friends?: Deal with in-house relationships, Writing: guidelines", "Guidelines terms", "Guideline structures", "Write HR guidelines", "Write guidelines"],
            [18, "Unit 6: Risk – Lesson 1: Discuss different aspects of risk", "Risk, Internationalisation", "Describing risk, Adverbs of degree", "Write about risks", "Discuss risk"],
            [19, "Unit 6: Risk – Lesson 2: Listening & Reading (Interview with MD of Risk Management, Internationalisation article)", "Adverbs of degree", "Risk grammar", "Summarize risk article", "Understand risk texts"],
            [20, "Unit 6: Risk – Lesson 3: Case Study – Winton Carter Mining: Evaluate mining risks, Writing: report", "Reports, Mining", "Report writing", "Write mining risk report", "Write risk reports"],
            [21, "Working Across Cultures 2: Working in New Markets", "New markets, Cultures", "Market grammar", "Compare markets", "Discuss new markets"],
            [22, "Revision B", "Review vocab Units 4–6", "Review Units 4–6 grammar", "Practice test Units 4–6", "Review Units 4–6"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 1–6", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Marketing/CSR theme)", "Presentation language", "Presentation connectors", "Prepare group presentation", "Present projects"],
        ];

        foreach ($lessons_business6 as $lesson) {
            $business6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 7 ==========
        $business7 = Subject::where('name', 'ICY Business 7')->first();

        $lessons_business7 = [
            [1,  "Unit 7: Management Styles – Lesson 1: Discuss aspects of management style", "Management, Styles", "Management qualities, Text reference", "Write about management style", "Discuss management styles"],
            [2,  "Unit 7: Management Styles – Lesson 2: Listening & Reading (Management book interview, CBS/Times article)", "Qualities, Text reference", "Presentation grammar", "Summarize management text", "Understand management texts"],
            [3,  "Unit 7: Management Styles – Lesson 3: Case Study – Selig & Lind: Choose project manager, Writing: report", "Reports", "Report writing structures", "Write project manager report", "Write reports"],
            [4,  "Unit 8: Team Building – Lesson 1: Talk about working in teams", "Team, Collaboration", "Prefixes, Modal perfect", "Team quiz", "Discuss teamwork"],
            [5,  "Unit 8: Team Building – Lesson 2: Listening & Reading (Interview with founder, Recipes for team building)", "Prefixes, Modal perfect", "Team grammar", "Summarize team article", "Understand team texts"],
            [6,  "Unit 8: Team Building – Lesson 3: Case Study – Motivating the sales team, Writing: letter", "Letters, Motivation", "Letter writing structures", "Write sales team letter", "Write letters"],
            [7,  "Unit 9: Raising Finance – Lesson 1: Discuss how and where finance can be raised", "Finance, Equity", "Financial terms, Dependent prepositions", "Research finance sources", "Discuss finance"],
            [8,  "Unit 9: Raising Finance – Lesson 2: Listening & Reading (Private equity firm interview, No more easy money)", "Dependent prepositions", "Negotiation grammar", "Summarize finance article", "Understand finance texts"],
            [9,  "Unit 9: Raising Finance – Lesson 3: Case Study – Last throw of the dice: Negotiate finance, Writing: summary", "Summaries, Finance", "Summary grammar", "Write finance summary", "Write summaries"],
            [10, "Working Across Cultures 3: Managing International Teams", "Customer service, Complaints", "Complaints, Gerunds", "Research customer service", "Discuss customer service"],
            [11, "Revision C", "Review vocab Units 7–9", "Review Units 7–9 grammar", "Practice test Units 7–9", "Review Units 7–9"],
            [12, "Unit 10: Customer Service – Lesson 1: Discuss factors and importance of customer service", "Crises, Ethics", "Conditionals, Crisis grammar", "List crisis strategies", "Discuss crises"],
            [13, "Unit 10: Customer Service – Lesson 2: Listening & Reading (Interview with restaurant manager, Changing customer service)", "Conditionals, Crisis terms", "Handling questions", "Summarize crisis article", "Understand crisis texts"],
            [14, "Unit 10: Customer Service – Lesson 3: Case Study – Hurrah Airlines: Deal with complaints, Writing: report", "Reports, Articles", "Report grammar", "Write crisis report", "Write reports"],
            [15, "Unit 11: Crisis Management – Lesson 1: Discuss ways of handling crises", "Mergers, Acquisitions", "Passives, Probability", "Define M&A terms", "Discuss mergers"],
            [16, "Unit 11: Crisis Management – Lesson 2: Listening & Reading (Interview with ethics professor, Brand crisis articles)", "Prediction, Probability", "M&A grammar", "Summarize M&A article", "Understand M&A texts"],
            [17, "Unit 11: Crisis Management – Lesson 3: Case Study – In Range: Press conference defence, Writing: article/report", "Reports, Presentations", "Report grammar", "Write acquisition report", "Write reports"],
            [18, "Unit 12: Mergers and Acquisitions – Lesson 1: Define & discuss acquisitions, mergers, ventures", "Negotiations, Cultures", "Negotiation grammar", "Compare negotiations", "Discuss negotiations"],
            [19, "Unit 12: Mergers and Acquisitions – Lesson 2: Listening & Reading (M&A centre interview, Green targets article)", "Review vocab Units 10–12", "Review Units 10–12 grammar", "Practice test Units 10–12", "Review Units 10–12"],
            [20, "Unit 12: Mergers and Acquisitions – Lesson 3: Case Study – Rinnovar International: Recommendations, Writing: report", "Mid-term vocabulary", "Grammar from Units 7–12", "Mid-term exam", "Assess progress"],
            [21, "Working Across Cultures 4: International Negotiations", "Presentation language", "Presentation connectors", "Prepare presentation", "Present projects"],
            [22, "Revision D", "Writing terms", "Writing grammar", "Write reports/letters", "Role-play teamwork"],
            [23, "Mid-term Test", "Role-play vocabulary", "Role-play grammar", "Role-play teamwork", "Review listening & vocab"],
            [24, "Project Work: Group Presentation (Finance/Management theme)", "Listening words", "Listening grammar", "Listen & answer quiz", "Consolidate grammar & writing"],
        ];

        foreach ($lessons_business7 as $lesson) {
            $business7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 8 ==========
        $business8 = Subject::where('name', 'ICY Business 8')->first();

        $lessons_business8 = [
            [1,  "Unit 1: First Impressions – Lesson 1: First impressions in presentations", "Impressions, Presentations", "Adverbs, Formal & informal register", "Write about impressions", "Discuss impressions"],
            [2,  "Unit 1: First Impressions – Lesson 2: Listening & Reading (It's not what you know, Adverbs)", "Adverbs, Networking", "Grammar for networking", "Summarize article", "Understand articles"],
            [3,  "Unit 1: First Impressions – Lesson 3: Case Study – Movers and shakers, Writing: formal letter", "Formal letters", "Letter structures", "Write formal letter", "Write letters"],
            [4,  "Unit 2: Training – Lesson 1: Apprenticeships", "Training, Apprenticeships", "Emphasising grammar", "Describe training", "Discuss training"],
            [5,  "Unit 2: Training – Lesson 2: Listening & Reading (Training leaders article, Emphasising your point)", "Emphasising points", "Articles, Countables", "Summarize training article", "Understand training texts"],
            [6,  "Unit 2: Training – Lesson 3: Case Study – Training at Carter & Randall, Writing: email (summarising decisions)", "Emails, Decisions", "Email grammar", "Write email", "Write emails"],
            [7,  "Unit 3: Energy – Lesson 1: Clean energy", "Energy, Clean power", "Report grammar", "Research clean energy", "Discuss energy"],
            [8,  "Unit 3: Energy – Lesson 2: Listening & Reading (The danger of losing touch with reality, Articles)", "Articles, Countable nouns", "Decision-making grammar", "Summarize energy article", "Understand energy texts"],
            [9,  "Unit 3: Energy – Lesson 3: Case Study – Energy saving at Turnalet Software, Writing: report", "Reports, Energy saving", "Report structures", "Write energy report", "Write reports"],
            [10, "Working Across Cultures 1: International Presentations", "International presentations", "Presentation grammar", "Research presentations", "Understand presentations"],
            [11, "Revision A", "Review vocab Units 1–3", "Review Units 1–3 grammar", "Practice test Units 1–3", "Review Units 1–3"],
            [12, "Unit 4: Marketing – Lesson 1: Customer relationship management", "Marketing, Customers", "Defining/non-defining clauses", "Customer service activity", "Discuss marketing"],
            [13, "Unit 4: Marketing – Lesson 2: Listening & Reading (Is the customer always right?, Defining clauses)", "Defining clauses", "Marketing grammar", "Summarize customer article", "Understand customer texts"],
            [14, "Unit 4: Marketing – Lesson 3: Case Study – Home2u Relaunch, Writing: press release", "Press releases", "Press release grammar", "Write press release", "Write press releases"],
            [15, "Unit 5: Employment Trends – Lesson 1: The future of work", "Employment, Work", "-ing forms, Infinitives", "Describe work trends", "Discuss employment"],
            [16, "Unit 5: Employment Trends – Lesson 2: Listening & Reading (Gigamonics article, -ing forms and infinitives)", "-ing forms, Infinitives", "Employment grammar", "Summarize employment article", "Understand employment texts"],
            [17, "Unit 5: Employment Trends – Lesson 3: Case Study – Delaney: call-centre absenteeism, Writing: email", "Conflict, Emails", "Conflict grammar", "Write conflict email", "Write emails"],
            [18, "Unit 6: Ethics – Lesson 1: Corporate responsibility", "Ethics, Responsibility", "Modal perfect", "Write about ethics", "Discuss ethics"],
            [19, "Unit 6: Ethics – Lesson 2: Listening & Reading (Enron whistleblower, Modal perfect)", "Modal perfect", "Ethics grammar", "Summarize whistleblower article", "Understand ethics texts"],
            [20, "Unit 6: Ethics – Lesson 3: Case Study – Daybreak Dilemmas, Writing: press release", "Press releases, Reports", "Press release grammar", "Write ethics press release", "Write press releases"],
            [21, "Working Across Cultures 2: Ethical International Business", "Ethics & culture", "Cross-cultural grammar", "Compare ethics cultures", "Discuss ethics & culture"],
            [22, "Revision B", "Review vocab Units 4–6", "Review Units 4–6 grammar", "Practice test Units 4–6", "Review Units 4–6"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 1–6", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Ethics/Marketing theme)", "Presentation language", "Presentation connectors", "Prepare presentation", "Present projects"],
        ];

        foreach ($lessons_business8 as $lesson) {
            $business8->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 9 ==========
        $business9 = Subject::where('name', 'ICY Business 9')->first();

        $lessons_business9 = [
            [1, "Unit 7: Finance – Lesson 1: Discuss sustainable banking", "Banking, Finance", "Multiword verbs, Financial terms", "Write about banking", "Discuss banking"],
            [2, "Unit 7: Finance – Lesson 2: Listening & Reading (Day of reckoning, Multiword verbs)", "Multiword verbs", "Grammar for banking", "Summarize finance article", "Understand finance texts"],
            [3, "Unit 7: Finance – Lesson 3: Case Study – Dragons & Angels: Investment proposal, Writing: email", "Investment proposals, Emails", "Email grammar", "Write investment email", "Write investment emails"],
            [4, "Unit 8: Consultants – Lesson 1: Talk about operations consulting", "Consulting, Operations", "Ellipsis, Consulting grammar", "Describe consulting", "Discuss consulting"],
            [5, "Unit 8: Consultants – Lesson 2: Listening & Reading (Day in the life of consultant, Ellipsis)", "Ellipsis, Terms", "Negotiation grammar", "Summarize consulting text", "Understand consulting texts"],
            [6, "Unit 8: Consultants – Lesson 3: Case Study – New market opportunities, Writing: email", "Emails, Opportunities", "Email grammar", "Write consulting email", "Write consulting emails"],
            [7, "Unit 9: Strategy – Lesson 1: Discuss strategy, goals and values", "Strategy, Goals, Values", "Rhetorical questions, Strategy grammar", "Write about strategy", "Discuss strategy"],
            [8, "Unit 9: Strategy – Lesson 2: Listening & Reading (Living strategy, Rhetorical questions)", "Rhetorical questions", "Mission statement grammar", "Summarize strategy article", "Understand strategy texts"],
            [9, "Unit 9: Strategy – Lesson 3: Case Study – Stella Airways: Strategy for the skies, Writing: summary", "Summaries, Strategy", "Summary grammar", "Write strategy summary", "Write strategy summaries"],
            [10, "Working Across Cultures 3: Socialising", "Socialising, Culture", "Socialising grammar", "Research socialising", "Understand socialising"],
            [11, "Revision C", "Review vocab Units 7–9", "Review Units 7–9 grammar", "Practice test Units 7–9", "Review Units 7–9"],
            [12, "Unit 10: Online Business – Lesson 1: Discuss developments in online business", "Online business, Corporate", "Rhetorical devices, Presentation grammar", "Write about online business", "Discuss online business"],
            [13, "Unit 10: Online Business – Lesson 2: Listening & Reading (Corporate firefighters, Rhetorical devices)", "Rhetorical devices", "Online grammar", "Summarize online text", "Understand online texts"],
            [14, "Unit 10: Online Business – Lesson 3: Case Study – The Fashion Screen, Writing: summary", "Summaries, Fashion", "Summary grammar", "Write fashion summary", "Write summaries"],
            [15, "Unit 11: New Business – Lesson 1: Get advice for start-ups", "Start-ups, Entrepreneurs", "Cleft sentences, Start-up grammar", "Write about start-ups", "Discuss start-ups"],
            [16, "Unit 11: New Business – Lesson 2: Listening & Reading (One-trick pony, Work longer, Cleft sentences)", "Cleft sentences", "Entrepreneur grammar", "Summarize start-up text", "Understand start-up texts"],
            [17, "Unit 11: New Business – Lesson 3: Case Study – OTC Tech: Growth proposal, Writing: email", "Emails, Proposals", "Proposal grammar", "Write growth email", "Write proposals"],
            [18, "Unit 12: Project Management – Lesson 1: Discuss project management issues", "Project management, Scheduling", "Instructive texts, Project grammar", "Write about project management", "Discuss project management"],
            [19, "Unit 12: Project Management – Lesson 2: Listening & Reading (Fine-tune schedule, Instructive texts)", "Instructive texts", "Teleconference grammar", "Summarize project text", "Understand project texts"],
            [20, "Unit 12: Project Management – Lesson 3: Case Study – Creating a world-class port, Writing: report", "Reports, Ports", "Report grammar", "Write project report", "Write reports"],
            [21, "Working Across Cultures 4: Managing an International Team", "International teams", "Negotiation grammar", "Compare international teams", "Discuss international teams"],
            [22, "Revision D", "Review vocab Units 10–12", "Review Units 10–12 grammar", "Practice test Units 10–12", "Review Units 10–12"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 7–12", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Finance/Strategy theme)", "Presentation language", "Presentation connectors", "Prepare presentation", "Present projects"],
        ];

        foreach ($lessons_business9 as $lesson) {
            $business9->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY WONDERLAND 1 ==========
        $wonderland1 = Subject::where('name', 'ICY Wonderland 1')->first();

        $lessons_w1 = [
            [1, "Unit 1: Art Class - Lesson 1: School Supplies", "pencil, eraser, ruler, crayon, school bag", "Trace words sheet; find 3 items at home and say their names to parents.", "Name common school supplies accurately and respond to classroom instructions."],
            [2, "Unit 1: Art Class - Lesson 2: School Supplies (Expanding)", "scissors, glue, paint, paintbrush", "Cut-and-paste matching sheet; practice Q&A with family.", "Use question/answer patterns to identify objects in context."],
            [3, "Unit 1: Art Class - Lesson 3: Story", "review of Unit 1 vocabulary", "Retell story to parents using pictures (3 sentences).", "Understand the main idea of a short story and retell with prompts."],
            [4, "Unit 1: Art Class - Lesson 4: Phonics", "pen, bag, paint, ball", "Phonics worksheet; record 1 minute practicing p/b (optional).", "Recognize and produce target phonics sounds and letters p/b."],
            [5, "Unit 2: Let's Play - Lesson 1: Toys", "ball, doll, kite, car, robot", "Draw your favorite toy and label it in English.", "Identify and name common toys; use 'I have...' in simple utterances."],
            [6, "Unit 2: Let's Play - Lesson 2: Toys (Expanding)", "train, teddy bear, puzzle, yo-yo", "Ask family members about toy likes (in L1/L2 mix) and report next class.", "Express likes/dislikes about toys using a fixed pattern."],
            [7, "Unit 2: Let's Play - Lesson 3: Story", "review of Unit 2 vocabulary", "Comprehension mini-sheet (circle the toy).", "Follow and act a simple story related to toys."],
            [8, "Unit 2: Let's Play - Lesson 4: Phonics", "top, doll, train, dog", "Phonics practice sheet (t/d); read chant to parents.", "Differentiate and produce /t/ vs /d/; recognize letters t, d."],
            [9, "Check Up 1 (Units 1 & 2)", "All Unit 1–2 vocabulary & patterns", "Review any incorrect items at home.", "Consolidate Units 1–2 and diagnose areas for support."],
            [10, "Project Day: Art & Toys Poster", "review Units 1–2 key vocab", "Finish poster at home if needed; practice 2-sentence presentation.", "Integrate vocabulary in a simple product and present to peers."],
            [11, "Unit 3: Many Colors - Lesson 1: Colors", "red, blue, green, yellow, orange", "Color-by-code worksheet; practice color words at home.", "Recognize and produce basic color vocabulary."],
            [12, "Unit 3: Many Colors - Lesson 2: Colors (Expanding)", "purple, pink, black, white", "Complete mini-graph at home using family preferences.", "Express color preferences in short sentences."],
            [13, "Mid-term Test (Units 1 & 2)", "All Unit 1–2 vocabulary & patterns", "Review mistakes; short revision list sent to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 3: Many Colors - Lesson 3: Story", "review Unit 3 colors", "Draw your favorite scene and label colors.", "Understand and retell a simple color story."],
            [15, "Unit 3: Many Colors - Lesson 4: Phonics", "kite, car, game, green", "Phonics worksheet; practice chant at home.", "Differentiate and produce /k/ and /g/; link sounds to letters."],
            [16, "Unit 4: Counting - Lesson 1: Numbers", "one, two, three, four, five", "Count toys at home and tell a parent (1–5).", "Recognize, say, and count 1–5 accurately."],
            [17, "Unit 4: Counting - Lesson 2: Numbers (Expanding)", "six, seven, eight, nine, ten", "Worksheet practice 6–10; count items at home.", "Count and answer 'How many?' up to 10."],
            [18, "Unit 4: Counting - Lesson 3: Story", "review Unit 4 numbers", "Number sequencing mini-book to finish at home.", "Understand a simple counting narrative and link numerals to sets."],
            [19, "Unit 4: Counting - Lesson 4: Phonics", "six, seven, ten, two", "Phonics worksheet; practice counting chant.", "Relate sounds /s/, /t/ to print and words."],
            [20, "Check Up 2 (Units 3 & 4)", "All Unit 3–4 vocabulary & patterns", "Revise items marked with a sticker at home.", "Consolidate Units 3–4; prepare for final."],
            [21, "Storytelling Day: Class Book Mix", "mixed vocabulary from Units 1–4", "Finish sequencing mini-booklet at home.", "Build confidence in extended speaking and sequencing."],
            [22, "Phonics Challenge & Games", "phonics from Units 1–4", "Short phonics sheet; practice tricky pairs at home.", "Consolidate phonics learned across the course."],
            [23, "Final Review & Mock Test", "review all Units 1–4", "Light review at home; good sleep reminder.", "Be ready and confident for final assessment."],
            [24, "Final Test (Units 1–4)", "All vocabulary & patterns from Units 1–4", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w1 as $lesson) {
            $wonderland1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 2 ==========
        $wonderland2 = Subject::where('name', 'ICY Wonderland 2')->first();

        $lessons_w2 = [
            [1, "Unit 5: Animals - Lesson 1: Pets", "cat, dog, fish, bird, rabbit", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: pets in context."],
            [2, "Unit 5: Animals - Lesson 2: Farm Animals (Expanding)", "cow, sheep, goat, horse", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: farm animals (expanding) in context."],
            [3, "Unit 5: Animals - Lesson 3: Story", "review of Unit 5 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [4, "Unit 5: Animals - Lesson 4: Phonics", "cat, cow, pig, pen", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [5, "Unit 6: Lunch - Lesson 1: Food", "rice, soup, chicken, bread, milk", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: food in context."],
            [6, "Unit 6: Lunch - Lesson 2: Food (Expanding)", "juice, salad, noodles, cake", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: food (expanding) in context."],
            [7, "Unit 6: Lunch - Lesson 3: Story", "review of Unit 6 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [8, "Unit 6: Lunch - Lesson 4: Phonics", "juice, jam, soup, salad", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [9, "Check Up 3 (Units 5 & 6)", "All Unit 5-6 vocabulary", "Revise for midterm.", "Consolidate learning from Units 5-6."],
            [10, "Unit 7: Things to do - Lesson 1: Abilities", "run, jump, swim, climb, dance", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: abilities in context."],
            [11, "Unit 7: Things to do - Lesson 2: Abilities (Expanding)", "sing, draw, read, write", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: abilities (expanding) in context."],
            [12, "Unit 7: Things to do - Lesson 3: Story", "review of Unit 7 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [13, "Mid-term Test (Units 5 & 6)", "All Unit 5–6 vocabulary & patterns", "Review mistakes; short revision list sent to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 7: Things to do - Lesson 4: Phonics", "run, read, swim, sing", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [15, "Unit 8: My body - Lesson 1: My face", "eye, nose, mouth, ear, hair", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: my face in context."],
            [16, "Unit 8: My body - Lesson 2: My body (Expanding)", "arm, leg, hand, foot", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: my body (expanding) in context."],
            [17, "Unit 8: My body - Lesson 3: Story", "review of Unit 8 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [18, "Unit 8: My body - Lesson 4: Phonics", "hand, hair, leg, lip", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [19, "Check Up 4 (Units 7 & 8)", "All Unit 7-8 vocabulary", "Revise for final.", "Consolidate learning from Units 7-8."],
            [20, "Extra Review & Games 20", "Mixed vocabulary from Units 5-8", "Review at home any tricky words.", "Reinforce learning from all topics."],
            [21, "Extra Review & Games 21", "Mixed vocabulary from Units 5-8", "Review at home any tricky words.", "Reinforce learning from all topics."],
            [22, "Extra Review & Games 22", "Mixed vocabulary from Units 5-8", "Review at home any tricky words.", "Reinforce learning from all topics."],
            [23, "Final Review & Mock Test", "review all Units 5-8", "Light review at home; good sleep reminder.", "Be ready and confident for final assessment."],
            [24, "Final Test (Units 5–8)", "All vocabulary & patterns from Units 5–8", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w2 as $lesson) {
            $wonderland2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 3 ==========
        $wonderland3 = Subject::where('name', 'ICY Wonderland 3')->first();

        $lessons_w3 = [
            [1, "Unit 1: First Day - Lesson 1: School Supplies", "pencil, eraser, ruler, crayon, school bag", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: school supplies in context."],
            [2, "Unit 1: First Day - Lesson 2: School Supplies (Expanding)", "scissors, glue, paint, paintbrush", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: school supplies (expanding) in context."],
            [3, "Unit 1: First Day - Lesson 3: Story", "review of Unit 1 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [4, "Unit 1: First Day - Lesson 4: Phonics", "pen, bag, paint, ball", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [5, "Unit 2: Art Class - Lesson 1: Art Supplies", "paint, brush, paper, scissors, glue", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: art supplies in context."],
            [6, "Unit 2: Art Class - Lesson 2: Colors", "red, blue, green, yellow, orange", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: colors in context."],
            [7, "Unit 2: Art Class - Lesson 3: Story", "review of Unit 2 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [8, "Unit 2: Art Class - Lesson 4: Phonics", "red, blue, green, yellow", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [9, "Check Up 1 (Units 1 & 2)", "All Unit 1-2 vocabulary", "Revise for midterm.", "Consolidate learning from Units 1-2."],
            [10, "Unit 3: Birthday Party - Lesson 1: Numbers", "one, two, three, four, five", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: numbers in context."],
            [11, "Unit 3: Birthday Party - Lesson 2: Toys", "ball, doll, kite, car, robot", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: toys in context."],
            [12, "Unit 3: Birthday Party - Lesson 3: Story", "review of Unit 3 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [13, "Mid-term Test (Units 1 & 2)", "All Unit 1–2 vocabulary & patterns", "Review mistakes; short revision list sent to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 3: Birthday Party - Lesson 4: Phonics", "ball, bag, car, cake", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [15, "Unit 4: Home - Lesson 1: Family", "father, mother, brother, sister, baby", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: family in context."],
            [16, "Unit 4: Home - Lesson 2: Food", "rice, soup, chicken, bread, milk", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: food in context."],
            [17, "Unit 4: Home - Lesson 3: Story", "review of Unit 4 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [18, "Unit 4: Home - Lesson 4: Phonics", "rice, read, soup, sister", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [19, "Check Up 2 (Units 3 & 4)", "All Unit 3-4 vocabulary", "Revise for final.", "Consolidate learning from Units 3-4."],
            [20, "YLE Practice & Review 20", "Mixed vocabulary from Units 1-4", "Review at home for final.", "Prepare for YLE-style assessment."],
            [21, "YLE Practice & Review 21", "Mixed vocabulary from Units 1-4", "Review at home for final.", "Prepare for YLE-style assessment."],
            [22, "YLE Practice & Review 22", "Mixed vocabulary from Units 1-4", "Review at home for final.", "Prepare for YLE-style assessment."],
            [24, "Final Test (Units 1–4)", "All vocabulary & patterns from Units 1–4", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w3 as $lesson) {
            $wonderland3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 4 ==========
        $wonderland4 = Subject::where('name', 'ICY Wonderland 4')->first();

        $lessons_w4 = [
            [1, "Unit 5: The Park - Lesson 1: Nature", "flower, tree, rock, river, hill, lake", "Workbook pp. (Nature); find 2 items at home and tell parents in English.", "Name common things in a park and produce short 'I can see…' sentences."],
            [2, "Unit 5: The Park - Lesson 2: Playtime", "play soccer, jump rope, fly a kite, ride a bike", "Workbook practice; ask a family member what they can do.", "Express simple abilities in the playtime context."],
            [3, "Unit 5: The Park - Lesson 3: Story", "review of Unit 5 vocabulary", "Retell story to parents using pictures (3 sentences).", "Understand main idea of a short story and retell with prompts."],
            [4, "Unit 5: The Park - Lesson 4: Animals", "turtle, frog, spider, ant", "Workbook page (animals); review Q&A at home.", "Respond accurately to visibility questions about animals."],
            [5, "Unit 6: The Zoo - Lesson 1: Animals", "monkey, elephant, tiger, bear, kangaroo, penguin", "Workbook pp. (zoo scene).", "Use location questions/answers with common zoo animals."],
            [6, "Unit 6: The Zoo - Lesson 2: Animals (Expanding)", "snake, giraffe, lion, zebra", "Workbook exercises (plural forms).", "Ask and answer about animal locations using plural nouns."],
            [7, "Unit 6: The Zoo - Lesson 3: Story", "review of Unit 6 vocabulary", "Story mini-sheet: circle the correct picture.", "Show understanding of a narrative and polite expressions."],
            [8, "Unit 6: The Zoo - Lesson 4: Abilities", "run, hop, swim, walk", "Short worksheet (abilities).", "Answer ability questions about animals correctly."],
            [9, "Check Up 3 (Units 5 & 6)", "All Unit 5–6 vocabulary & patterns", "Review items marked with a sticker at home.", "Consolidate learning from Units 5–6 and diagnose needs."],
            [10, "Unit 7: Science Day - Lesson 1: My Body", "arm, hand, finger, leg, foot, toe", "Workbook pp. (body).", "Identify and name body parts; use singular/plural frames."],
            [11, "Unit 7: Science Day - Lesson 2: My Face", "eye, nose, mouth, ear", "Practice Q&A at home with family.", "Use confirmation questions about face parts."],
            [12, "Unit 7: Science Day - Lesson 3: Story", "review of Unit 7 vocabulary", "Draw your favorite scene and label it.", "Understand and retell a simple story using polite phrases."],
            [13, "Mid-term Test (Units 5 & 6)", "All Unit 5–6 vocabulary & patterns", "Review mistakes; short revision list to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 7: Science Day - Lesson 4: Healthy Habits", "wash my face, wash my hands, brush my hair, brush my teeth", "Worksheet; practice routine at home and tell parents.", "Use everyday habit phrases in simple sentences."],
            [15, "Unit 8: The Toy Store - Lesson 1: Adjectives", "old, new, big, small, long, short", "Workbook adjectives page.", "Use basic adjectives to describe objects accurately."],
            [16, "Unit 8: The Toy Store - Lesson 2: Adjectives (Expanding)", "fast, slow, noisy, quiet", "Practice Q&A with a family member (report next class).", "Ask and answer adjective questions correctly."],
            [17, "Unit 8: The Toy Store - Lesson 3: Story", "review of Unit 8 vocabulary", "Comprehension mini-sheet (circle the picture).", "Use polite requests in a familiar context."],
            [18, "Unit 8: The Toy Store - Lesson 4: Transportation", "bus, truck, train, boat", "Workbook transport page.", "Recognize and name common vehicles; use 'What’s this/that?'"],
            [19, "Check Up 4 (Units 7 & 8)", "All Unit 7–8 vocabulary", "Revise items marked with a sticker at home.", "Consolidate Units 7–8; prepare for YLE practice."],
            [20, "YLE Practice 1", "Mixed vocabulary from Units 5–8", "Review mistakes at home; re-practice tricky items.", "Familiarize with YLE task formats and strategies."],
            [21, "YLE Practice 2", "Mixed vocabulary from Units 5–8", "Short mixed-skill worksheet at home.", "Improve accuracy and fluency under time constraints."],
            [22, "YLE Practice 3", "Mixed vocabulary from Units 5–8", "Light review and rest advice.", "Be ready for final assessment tasks."],
            [23, "Final Review & Mock Test", "review all Units 5–8", "Light review at home; good sleep reminder.", "Be confident and ready for final assessment."],
            [24, "Final Test (Units 5–8)", "All vocabulary & patterns from Units 5–8", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w4 as $lesson) {
            $wonderland4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 5 ==========
        $wonderland5 = Subject::where('name', 'ICY Wonderland 5')->first();

        $lessons_w5 = [
            [1, "Unit 1: How We Feel - Lesson 1: Feelings", "happy, sad, hot, cold, hungry, thirsty", "Worksheet: Match words to pictures.", "Identify and say basic feelings in English."],
            [2, "Unit 1: How We Feel - Lesson 2: Feelings (Expanding)", "sick, tired, bored, excited", "Write 5 sentences using new feelings.", "Use expanded feelings vocabulary in short dialogues."],
            [3, "Unit 1: How We Feel - Lesson 3: Story", "hurt, leg, arm", "Draw and label your favorite story part.", "Comprehend and retell a short story."],
            [4, "Unit 1: How We Feel - Lesson 4: The Senses", "see, hear, smell, taste, touch", "Make a senses chart at home.", "Name and use sense verbs in context."],
            [5, "Unit 2: In Town - Lesson 1: Jobs", "doctor, nurse, teacher, student, pilot, cook", "Draw and label 3 jobs.", "Identify and name common jobs."],
            [6, "Unit 2: In Town - Lesson 2: Jobs (Expanding)", "police officer, firefighter, bus driver, soccer player", "Write 4 sentences about jobs.", "Use expanded jobs vocabulary in dialogues."],
            [7, "Unit 2: In Town - Lesson 3: Story", "excuse me, borrow, phone", "Draw your favorite story scene.", "Comprehend and retell a short story."],
            [8, "Unit 2: In Town - Lesson 4: Places", "hospital, school, home, restaurant", "Write 4 sentences about places.", "Identify and talk about places in town."],
            [9, "Check Up 1 (Unit 1 + Unit 2)", "All vocabulary from Units 1-2", "Workbook review pages.", "Review and consolidate Units 1-2."],
            [10, "Unit 3: Things to Eat - Lesson 1: Food", "soup, salad, spaghetti, french fries, steak, eggs", "Draw and label 3 foods.", "Identify and name common foods."],
            [11, "Unit 3: Things to Eat - Lesson 2: Fruit", "apple, banana, orange, peach", "Write 4 fruit sentences.", "Use fruit vocabulary in sentences."],
            [12, "Unit 3: Things to Eat - Lesson 3: Story", "apple, please, thank you", "Draw your favorite part of story.", "Comprehend and act out short story."],
            [13, "Mid-term Test", "All vocabulary Units 1-3", "Study all Units 1-3.", "Assess mid-term learning outcomes."],
            [14, "Unit 3: Things to Eat - Lesson 4: Dairy Products", "milk, yogurt, cheese, butter", "Write 3 sentences about dairy.", "Identify and talk about dairy products."],
            [15, "Unit 4: Things to Wear - Lesson 1: Clothes", "shirt, dress, skirt, pants, socks, shoes", "Draw and label 3 clothes.", "Identify and name common clothes."],
            [16, "Unit 4: Things to Wear - Lesson 2: Clothes (Expanding)", "cap, T-shirt, shorts, sneakers", "Write 4 sentences about clothes.", "Use expanded clothes vocabulary in dialogues."],
            [17, "Unit 4: Things to Wear - Lesson 3: Story", "hat, coat, sweater, boots", "Draw your favorite part of story.", "Comprehend and act out short story."],
            [18, "Unit 4: Things to Wear - Lesson 4: Clothes", "hat, coat, sweater, boots", "Write 3 clothes sentences.", "Identify and talk about clothes."],
            [19, "Check Up 2 (Unit 3 + Unit 4)", "All vocabulary from Units 3-4", "Workbook review pages.", "Review and consolidate Units 3-4."],
            [20, "YLE Practice 1", "Vocabulary from Units 1-4", "Review YLE vocabulary.", "Prepare for YLE Starters test."],
            [21, "YLE Practice 2", "Vocabulary from Units 1-4", "Review YLE vocabulary.", "Prepare for YLE Starters test."],
            [22, "YLE Review", "Vocabulary from Units 1-4", "Revise vocabulary and skills.", "Be ready for YLE Starters test."],
            [23, "YLE Speaking Practice", "Vocabulary from Units 1-4", "Practice speaking daily.", "Speak confidently in YLE test."],
            [24, "Final Test", "All vocabulary Units 1-4", "Study all Units 1-4.", "Assess final learning outcomes."],
        ];

        foreach ($lessons_w5 as $lesson) {
            $wonderland5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 6 ==========
        $wonderland6 = Subject::where('name', 'ICY Wonderland 6')->first();

        $lessons_w6 = [
            [1, "Unit 5: Things to Do - Lesson 1: Actions", "read, write, draw, talk, sing, dance", "Practice writing action verbs at home", "Recognize and use basic action verbs in context"],
            [2, "Unit 5: Things to Do - Lesson 2: Actions (Expanding)", "eat, drink, sleep, play", "Complete action-matching worksheet", "Use extended action verbs in daily conversation"],
            [3, "Unit 5: Things to Do - Lesson 3: Story", "story vocabulary from 'Let's Play!'", "Draw favorite scene from story", "Understand and retell a simple story"],
            [4, "Unit 5: Things to Do - Lesson 4: Activities", "play the guitar, listen to music, watch TV, do homework", "Practice describing own activities at home", "Use activity vocabulary to describe daily routines"],

            [5, "Unit 6: Home - Lesson 1: Things at Home", "bed, bookshelf, table, sofa, clock, computer", "Draw and label 3 items from home", "Identify and name common household objects"],
            [6, "Unit 6: Home - Lesson 2: Rooms", "bedroom, bathroom, living room, kitchen", "Describe your favorite room at home", "Name and describe rooms in a house"],
            [7, "Unit 6: Home - Lesson 3: Story", "story vocabulary from 'Surprise!'", "Write one sentence about the story", "Understand and retell a short story"],
            [8, "Unit 6: Home - Lesson 4: Numbers (0-100)", "numbers 0-100", "Count and record items at home", "Count and use numbers in conversation"],

            [9, "Check Up 1 (Unit 5 & Unit 6)", "review vocabulary from Units 5 & 6", "Review vocabulary at home", "Recall and use vocabulary from Units 5 & 6"],

            [10, "Unit 7: My Day - Lesson 1: Time", "one o’clock, one fifteen, one thirty, one forty-five, two o’clock", "Practice telling time at home", "Tell and ask about time accurately"],
            [11, "Unit 7: My Day - Lesson 2: Meals", "breakfast, lunch, snack, dinner", "Draw and label meals", "Use vocabulary to talk about meals"],
            [12, "Unit 7: My Day - Lesson 3: Story", "story vocabulary from 'Time for Bed'", "Write a sentence about story", "Understand and retell a bedtime story"],
            [13, "Mid-term Test", "-", "-", "Assess progress in Units 5-7"],
            [14, "Unit 7: My Day - Lesson 4: Daily Routine", "wake up, go to school, come home, go to bed", "Write daily routine", "Describe and discuss daily routines"],

            [15, "Unit 8: My Week - Lesson 1: Subjects", "science, art, math, PE, music, social studies", "Draw and label favorite subject", "Identify and discuss school subjects"],
            [16, "Unit 8: My Week - Lesson 2: Classes", "karate class, dance class, swimming class, English class", "Write own class schedule", "Use class vocabulary to talk about schedule"],
            [17, "Unit 8: My Week - Lesson 3: Story", "story vocabulary from 'A Friend'", "Draw favorite part of story", "Understand and retell a friendship story"],
            [18, "Unit 8: My Week - Lesson 4: Countries", "Brazil, Canada, Egypt, South Korea", "Color and label flags", "Identify countries and say where people are from"],

            [19, "Check Up 2 (Unit 7 & Unit 8)", "review vocabulary from Units 7 & 8", "Review vocabulary", "Recall and use vocabulary from Units 7 & 8"],
            [20, "YLE Practice 1", "-", "-", "Familiarize with YLE format"],
            [21, "YLE Practice 2", "-", "-", "Familiarize with YLE format"],
            [22, "Revision", "-", "-", "Prepare for final test"],
            [23, "Speaking & Listening Practice", "-", "-", "Improve fluency and listening comprehension"],
            [24, "Final Test", "-", "-", "Assess overall course outcomes"],
        ];

        foreach ($lessons_w6 as $lesson) {
            $wonderland6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY HIGHSCHOOL 1 ==========
        $highschool1 = Subject::where('name', 'ICY Highschool 1')->first();

        $lessons_hs1 = [
            [1, "Chuyên đề 1: Ngữ âm – Phân biệt âm cơ bản, luyện phát âm", "Phonemes, Vowel, Consonant", "Phonetics rules", "Luyện phát âm IPA", "Phân biệt ngữ âm"],
            [2, "Chuyên đề 2: Trọng âm – Quy tắc trọng âm cơ bản & bài tập", "Stress rules, Word stress", "Stress placement rules", "Làm bài tập trọng âm", "Hiểu trọng âm"],
            [3, "Chuyên đề 3: Verb Tenses – Ôn tập thì cơ bản", "Simple tenses, Continuous, Perfect", "Verb tense forms", "Viết đoạn văn sử dụng thì cơ bản", "Nắm vững thì cơ bản"],
            [4, "Chuyên đề 3: Verb Tenses – Bài tập ứng dụng nâng cao", "Advanced tense markers", "Usage in contexts", "Bài tập chia thì nâng cao", "Ứng dụng thì nâng cao"],
            [5, "Chuyên đề 4: Sự phối hợp thì – Lý thuyết & ví dụ minh họa", "Sequence of tenses", "Tense agreement", "Viết lại câu với đúng thì", "Hiểu sự phối hợp thì"],
            [6, "Chuyên đề 4: Sự phối hợp thì – Bài tập thực hành", "Reported tense shift", "Backshifting rules", "Bài tập chuyển đổi thì", "Ứng dụng phối hợp thì"],
            [7, "Chuyên đề 5: Sự hòa hợp CN & ĐT – Quy tắc cơ bản", "Subject-verb agreement", "Singular vs plural verb", "Chọn động từ đúng", "Nắm vững SVA"],
            [8, "Chuyên đề 5: Sự hòa hợp CN & ĐT – Bài tập tổng hợp", "Special cases", "Indefinite pronouns", "Sửa lỗi SVA", "Sửa lỗi SVA"],
            [9, "Chuyên đề 6: Động từ khuyết thiếu – Các loại modal verbs", "Modal verbs (can, may, must)", "Modal verb structures", "Hoàn thành câu với modals", "Sử dụng modal verbs"],
            [10, "Chuyên đề 6: Động từ khuyết thiếu – Bài tập ứng dụng", "Obligation & advice modals", "Usage of modals", "Viết đoạn văn sử dụng modals", "Ứng dụng modal verbs"],
            [11, "Chuyên đề 7: Cụm động từ – Cách dùng & ví dụ", "Phrasal verbs", "Phrasal verb structures", "Danh sách phrasal verbs", "Nắm vững cụm động từ"],
            [12, "Chuyên đề 7: Cụm động từ – Bài tập thực hành", "Common phrasal verbs", "Common phrasal verb usage", "Đặt câu với phrasal verbs", "Thực hành phrasal verbs"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá năng lực giữa kỳ"],
            [14, "Chuyên đề 8: Thức giả định – Lý thuyết & ví dụ", "Subjunctive, Wish clauses", "Subjunctive forms", "Viết câu giả định", "Hiểu thức giả định"],
            [15, "Chuyên đề 8: Thức giả định – Bài tập ứng dụng", "If only, It's time", "Hypothetical expressions", "Bài tập if only/wish", "Ứng dụng thức giả định"],
            [16, "Chuyên đề 9: Danh động từ – Cách dùng & cấu trúc", "Gerund, Gerund phrases", "Gerund usage", "Viết câu với gerund", "Hiểu danh động từ"],
            [17, "Chuyên đề 9: Danh động từ – Bài tập thực hành", "Gerund vs Infinitive", "Gerund vs Infinitive", "Phân biệt gerund/infinitive", "Ứng dụng gerund"],
            [18, "Chuyên đề 10: Câu hỏi đuôi – Lý thuyết & ví dụ", "Question tags", "Tag question rules", "Đặt câu hỏi đuôi", "Hiểu câu hỏi đuôi"],
            [19, "Chuyên đề 10: Câu hỏi đuôi – Bài tập luyện tập", "Negative & positive tags", "Tag question exceptions", "Viết đoạn hội thoại", "Thực hành câu hỏi đuôi"],
            [20, "Chuyên đề 11: So sánh – Các loại so sánh", "Comparatives, Superlatives", "Comparative structures", "Viết câu so sánh", "Hiểu so sánh"],
            [21, "Chuyên đề 11: So sánh – Bài tập thực hành", "So sánh nâng cao", "Advanced comparisons", "Bài tập nâng cao", "Ứng dụng so sánh nâng cao"],
            [22, "Chuyên đề 12: Trật tự của tính từ – Quy tắc & ví dụ", "Adjective order", "Adjective order rules", "Sắp xếp tính từ", "Hiểu trật tự tính từ"],
            [23, "Chuyên đề 13: Mạo từ – Cách dùng a/an/the", "Articles (a/an/the)", "Article usage rules", "Điền mạo từ đúng", "Sử dụng mạo từ đúng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá năng lực cuối kỳ"],
        ];

        foreach ($lessons_hs1 as $lesson) {
            $highschool1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 2 ==========
        $highschool2 = Subject::where('name', 'ICY Highschool 2')->first();

        $lessons_hs2 = [
            [1, "Chuyên đề 14: Cấu tạo từ – Lý thuyết & ví dụ", "Prefixes, Suffixes", "Word formation rules", "Viết từ mới bằng tiền tố/hậu tố", "Hiểu cấu tạo từ"],
            [2, "Chuyên đề 14: Cấu tạo từ – Bài tập ứng dụng", "Word formation", "Suffixes & prefixes", "Làm bài tập word formation", "Ứng dụng word formation"],
            [3, "Chuyên đề 15: Từ chỉ số lượng – Lý thuyết & ví dụ", "Quantifiers, Much/Many", "Quantifier rules", "Điền từ chỉ số lượng", "Hiểu từ chỉ số lượng"],
            [4, "Chuyên đề 15: Từ chỉ số lượng – Bài tập thực hành", "Few/Little", "Practice with quantifiers", "Viết câu với few/little", "Ứng dụng trong bài tập"],
            [5, "Chuyên đề 16: Giới từ – Các loại giới từ cơ bản", "Prepositions of place/time", "Preposition usage", "Đặt câu với giới từ", "Hiểu giới từ"],
            [6, "Chuyên đề 16: Giới từ – Bài tập luyện tập", "Prepositional phrases", "Prepositional structures", "Hoàn thành bài tập giới từ", "Sử dụng giới từ đúng"],
            [7, "Chuyên đề 17: Liên từ – Lý thuyết & ví dụ", "Conjunctions: and, but, or", "Conjunction rules", "Viết câu với liên từ", "Hiểu liên từ"],
            [8, "Chuyên đề 17: Liên từ – Bài tập thực hành", "Although, unless", "Advanced conjunctions", "Làm bài tập liên từ", "Sử dụng liên từ đúng"],
            [9, "Chuyên đề 18: Câu bị động – Các dạng bị động cơ bản", "Passive voice", "Passive voice forms", "Chuyển câu sang bị động", "Hiểu câu bị động"],
            [10, "Chuyên đề 18: Câu bị động – Bài tập ứng dụng", "Advanced passives", "Usage of passives", "Viết đoạn văn bị động", "Ứng dụng bị động"],
            [11, "Chuyên đề 19: Câu điều kiện – Lý thuyết & ví dụ", "Conditionals (0,1,2)", "Conditional sentence rules", "Viết câu điều kiện", "Hiểu câu điều kiện"],
            [12, "Chuyên đề 19: Câu điều kiện – Bài tập luyện tập", "Conditionals (3, mixed)", "Mixed conditionals", "Làm bài tập điều kiện nâng cao", "Ứng dụng điều kiện nâng cao"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Nguyên tắc chuyển đổi", "Direct speech", "Rules for reported speech", "Chuyển câu trực tiếp thành gián tiếp", "Hiểu câu trực tiếp/gián tiếp"],
            [15, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Bài tập ứng dụng", "Indirect speech", "Reported questions & commands", "Bài tập reported speech", "Ứng dụng reported speech"],
            [16, "Chuyên đề 21: Đảo ngữ – Lý thuyết & ví dụ", "Inversion structures", "Inversion rules", "Viết câu đảo ngữ", "Hiểu đảo ngữ"],
            [17, "Chuyên đề 21: Đảo ngữ – Bài tập thực hành", "Negative inversion", "Practice inversion", "Bài tập đảo ngữ", "Ứng dụng đảo ngữ"],
            [18, "Chuyên đề 22: Mệnh đề quan hệ – Lý thuyết & ví dụ", "Relative clauses", "Relative clause rules", "Viết câu với mệnh đề quan hệ", "Hiểu mệnh đề quan hệ"],
            [19, "Chuyên đề 22: Mệnh đề quan hệ – Bài tập ứng dụng", "Defining & non-defining", "Reduced relative clauses", "Bài tập rút gọn mệnh đề quan hệ", "Ứng dụng mệnh đề quan hệ"],
            [20, "Chuyên đề 23: Thành ngữ – Các thành ngữ phổ biến", "Idioms", "Idiomatic usage", "Viết câu với idioms", "Hiểu thành ngữ"],
            [21, "Chuyên đề 23: Thành ngữ – Bài tập luyện tập", "Idiomatic phrases", "Idioms in sentences", "Bài tập idioms", "Ứng dụng thành ngữ"],
            [22, "Chuyên đề 24: Cụm từ cố định – Tổng hợp & bài tập", "Fixed expressions", "Fixed expression rules", "Viết câu với cụm từ cố định", "Hiểu cụm từ cố định"],
            [23, "Chuyên đề 25: Cấu trúc thông dụng – Tổng hợp & bài tập", "Common structures", "Common structures", "Viết đoạn văn dùng cấu trúc thông dụng", "Ứng dụng cấu trúc thông dụng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs2 as $lesson) {
            $highschool2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 3 ==========
        $highschool3 = Subject::where('name', 'ICY Highschool 3')->first();

        $lessons_hs3 = [
            [1, "Test 1", "Vocab Test 1", "Grammar Test 1", "Làm Test 1", "Hoàn thành Test 1"],
            [2, "Test 2", "Vocab Test 2", "Grammar Test 2", "Làm Test 2", "Hoàn thành Test 2"],
            [3, "Test 3", "Vocab Test 3", "Grammar Test 3", "Làm Test 3", "Hoàn thành Test 3"],
            [4, "Review Test 1–3", "Review vocab 1–3", "Review grammar 1–3", "Ôn tập Test 1–3", "Củng cố kiến thức Test 1–3"],
            [5, "Test 4", "Vocab Test 4", "Grammar Test 4", "Làm Test 4", "Hoàn thành Test 4"],
            [6, "Test 5", "Vocab Test 5", "Grammar Test 5", "Làm Test 5", "Hoàn thành Test 5"],
            [7, "Test 6", "Vocab Test 6", "Grammar Test 6", "Làm Test 6", "Hoàn thành Test 6"],
            [8, "Review Test 4–6", "Review vocab 4–6", "Review grammar 4–6", "Ôn tập Test 4–6", "Củng cố kiến thức Test 4–6"],
            [9, "Test 7", "Vocab Test 7", "Grammar Test 7", "Làm Test 7", "Hoàn thành Test 7"],
            [10, "Test 8", "Vocab Test 8", "Grammar Test 8", "Làm Test 8", "Hoàn thành Test 8"],
            [11, "Test 9", "Vocab Test 9", "Grammar Test 9", "Làm Test 9", "Hoàn thành Test 9"],
            [12, "Review Test 7–9", "Review vocab 7–9", "Review grammar 7–9", "Ôn tập Test 7–9", "Củng cố kiến thức Test 7–9"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 10", "Vocab Test 10", "Grammar Test 10", "Làm Test 10", "Hoàn thành Test 10"],
            [15, "Test 11", "Vocab Test 11", "Grammar Test 11", "Làm Test 11", "Hoàn thành Test 11"],
            [16, "Test 12", "Vocab Test 12", "Grammar Test 12", "Làm Test 12", "Hoàn thành Test 12"],
            [17, "Review Test 10–12", "Review vocab 10–12", "Review grammar 10–12", "Ôn tập Test 10–12", "Củng cố kiến thức Test 10–12"],
            [18, "Test 13", "Vocab Test 13", "Grammar Test 13", "Làm Test 13", "Hoàn thành Test 13"],
            [19, "Test 14", "Vocab Test 14", "Grammar Test 14", "Làm Test 14", "Hoàn thành Test 14"],
            [20, "Test 15", "Vocab Test 15", "Grammar Test 15", "Làm Test 15", "Hoàn thành Test 15"],
            [21, "Review Test 13–15", "Review vocab 13–15", "Review grammar 13–15", "Ôn tập Test 13–15", "Củng cố kiến thức Test 13–15"],
            [22, "Practice Test 1", "Practice vocab 1", "Practice grammar 1", "Thực hành đề 1", "Thực hành tổng hợp 1"],
            [23, "Practice Test 2", "Practice vocab 2", "Practice grammar 2", "Thực hành đề 2", "Thực hành tổng hợp 2"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs3 as $lesson) {
            $highschool3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 4 ==========
        $highschool4 = Subject::where('name', 'ICY Highschool 4')->first();

        $lessons_hs4 = [
            [1, "Test 16", "Vocab Test 16", "Grammar Test 16", "Làm Test 16", "Hoàn thành Test 16"],
            [2, "Test 17", "Vocab Test 17", "Grammar Test 17", "Làm Test 17", "Hoàn thành Test 17"],
            [3, "Test 18", "Vocab Test 18", "Grammar Test 18", "Làm Test 18", "Hoàn thành Test 18"],
            [4, "Review Test 16–18", "Review vocab 16–18", "Review grammar 16–18", "Ôn tập Test 16–18", "Củng cố kiến thức Test 16–18"],
            [5, "Test 19", "Vocab Test 19", "Grammar Test 19", "Làm Test 19", "Hoàn thành Test 19"],
            [6, "Test 20", "Vocab Test 20", "Grammar Test 20", "Làm Test 20", "Hoàn thành Test 20"],
            [7, "Test 21", "Vocab Test 21", "Grammar Test 21", "Làm Test 21", "Hoàn thành Test 21"],
            [8, "Review Test 19–21", "Review vocab 19–21", "Review grammar 19–21", "Ôn tập Test 19–21", "Củng cố kiến thức Test 19–21"],
            [9, "Test 22", "Vocab Test 22", "Grammar Test 22", "Làm Test 22", "Hoàn thành Test 22"],
            [10, "Test 23", "Vocab Test 23", "Grammar Test 23", "Làm Test 23", "Hoàn thành Test 23"],
            [11, "Test 24", "Vocab Test 24", "Grammar Test 24", "Làm Test 24", "Hoàn thành Test 24"],
            [12, "Review Test 22–24", "Review vocab 22–24", "Review grammar 22–24", "Ôn tập Test 22–24", "Củng cố kiến thức Test 22–24"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 25", "Vocab Test 25", "Grammar Test 25", "Làm Test 25", "Hoàn thành Test 25"],
            [15, "Test 26", "Vocab Test 26", "Grammar Test 26", "Làm Test 26", "Hoàn thành Test 26"],
            [16, "Test 27", "Vocab Test 27", "Grammar Test 27", "Làm Test 27", "Hoàn thành Test 27"],
            [17, "Review Test 25–27", "Review vocab 25–27", "Review grammar 25–27", "Ôn tập Test 25–27", "Củng cố kiến thức Test 25–27"],
            [18, "Test 28", "Vocab Test 28", "Grammar Test 28", "Làm Test 28", "Hoàn thành Test 28"],
            [19, "Test 29", "Vocab Test 29", "Grammar Test 29", "Làm Test 29", "Hoàn thành Test 29"],
            [20, "Test 30", "Vocab Test 30", "Grammar Test 30", "Làm Test 30", "Hoàn thành Test 30"],
            [21, "Review Test 28–30", "Review vocab 28–30", "Review grammar 28–30", "Ôn tập Test 28–30", "Củng cố kiến thức Test 28–30"],
            [22, "Practice Test 1", "Practice vocab 1", "Practice grammar 1", "Thực hành đề 1", "Thực hành tổng hợp 1"],
            [23, "Practice Test 2", "Practice vocab 2", "Practice grammar 2", "Thực hành đề 2", "Thực hành tổng hợp 2"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs4 as $lesson) {
            $highschool4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 5 ==========
        $highschool5 = Subject::where('name', 'ICY Highschool 5')->first();

        $lessons_hs5 = [
            [1,  "Test 31 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [2,  "Test 32 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [3,  "Test 33 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [4,  "Test 34 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [5,  "Test 35 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [6,  "Mock Test 1 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [7,  "Mock Test 2 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [8,  "Mock Test 3 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [9,  "Mock Test 4 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [10, "Mock Test 5 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [11, "Mock Test 6 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [12, "Mock Test 7 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Mock Test 8 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [15, "Mock Test 9 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [16, "Mock Test 10 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [17, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
            [18, "Mock Test 11 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [19, "Mock Test 12 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [20, "Mock Test 13 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [21, "Mock Test 14 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [22, "Mock Test 15 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [23, "Mock Test 16 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [24, "FinalTest", "Final vocabulary", "Final review grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs5 as $lesson) {
            $highschool5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 6 ==========
        $highschool6 = Subject::where('name', 'ICY Highschool 6')->first();

        $lessons_highschool6 = [
            [1,  "Đề thi thật 2017 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [2,  "Đề thi thật 2017 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [3,  "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [4,  "Đề thi thật 2018 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [5,  "Đề thi thật 2018 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [6,  "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [7,  "Đề thi thật 2019 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [8,  "Đề thi thật 2019 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [9,  "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [10, "Đề thi thật 2020 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [11, "Đề thi thật 2020 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [12, "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Đề thi thật 2021 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [15, "Đề thi thật 2021 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [16, "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [17, "Đề thi thật 2022 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [18, "Đề thi thật 2022 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [19, "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [20, "Đề thi thật 2023 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [21, "Đề thi thật 2023 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [22, "Đề thi thật 2024 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [23, "Đề thi thật 2024 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [24, "Final Test", "Final Review vocabulary", "Final review grammar", "Final Review exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_highschool6 as $lesson) {
            $highschool6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 1 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 1')->first();

        $lessons = [
            [1,  "Chuyên đề 1: Ngữ âm – Phân biệt âm cơ bản, luyện phát âm", "Phonemes, Vowel, Consonant", "Phonetics rules", "Luyện phát âm IPA", "Phân biệt ngữ âm"],
            [2,  "Chuyên đề 2: Trọng âm – Quy tắc trọng âm cơ bản & bài tập", "Stress rules, Word stress", "Stress placement rules", "Làm bài tập trọng âm", "Hiểu trọng âm"],
            [3,  "Chuyên đề 3: Verb Tenses – Ôn tập thì cơ bản", "Simple tenses, Continuous, Perfect", "Verb tense forms", "Viết đoạn văn sử dụng thì cơ bản", "Nắm vững thì cơ bản"],
            [4,  "Chuyên đề 3: Verb Tenses – Bài tập ứng dụng nâng cao", "Advanced tense markers", "Usage in contexts", "Bài tập chia thì nâng cao", "Ứng dụng thì nâng cao"],
            [5,  "Chuyên đề 4: Sự phối hợp thì – Lý thuyết & ví dụ minh họa", "Sequence of tenses", "Tense agreement", "Viết lại câu với đúng thì", "Hiểu sự phối hợp thì"],
            [6,  "Chuyên đề 4: Sự phối hợp thì – Bài tập thực hành", "Reported tense shift", "Backshifting rules", "Bài tập chuyển đổi thì", "Ứng dụng phối hợp thì"],
            [7,  "Chuyên đề 5: Sự hòa hợp CN & ĐT – Quy tắc cơ bản", "Subject-verb agreement", "Singular vs plural verb", "Chọn động từ đúng", "Nắm vững SVA"],
            [8,  "Chuyên đề 5: Sự hòa hợp CN & ĐT – Bài tập tổng hợp", "Special cases", "Indefinite pronouns", "Sửa lỗi SVA", "Sửa lỗi SVA"],
            [9,  "Chuyên đề 6: Động từ khuyết thiếu – Các loại modal verbs", "Modal verbs (can, may, must)", "Modal verb structures", "Hoàn thành câu với modals", "Sử dụng modal verbs"],
            [10, "Chuyên đề 6: Động từ khuyết thiếu – Bài tập ứng dụng", "Obligation & advice modals", "Usage of modals", "Viết đoạn văn sử dụng modals", "Ứng dụng modal verbs"],
            [11, "Chuyên đề 7: Cụm động từ – Cách dùng & ví dụ", "Phrasal verbs", "Phrasal verb structures", "Danh sách phrasal verbs", "Nắm vững cụm động từ"],
            [12, "Chuyên đề 7: Cụm động từ – Bài tập thực hành", "Common phrasal verbs", "Common phrasal verb usage", "Đặt câu với phrasal verbs", "Thực hành phrasal verbs"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá năng lực giữa kỳ"],
            [14, "Chuyên đề 8: Thức giả định – Lý thuyết & ví dụ", "Subjunctive, Wish clauses", "Subjunctive forms", "Viết câu giả định", "Hiểu thức giả định"],
            [15, "Chuyên đề 8: Thức giả định – Bài tập ứng dụng", "If only, It's time", "Hypothetical expressions", "Bài tập if only/wish", "Ứng dụng thức giả định"],
            [16, "Chuyên đề 9: Danh động từ – Cách dùng & cấu trúc", "Gerund, Gerund phrases", "Gerund usage", "Viết câu với gerund", "Hiểu danh động từ"],
            [17, "Chuyên đề 9: Danh động từ – Bài tập thực hành", "Gerund vs Infinitive", "Gerund vs Infinitive", "Phân biệt gerund/infinitive", "Ứng dụng gerund"],
            [18, "Chuyên đề 10: Câu hỏi đuôi – Lý thuyết & ví dụ", "Question tags", "Tag question rules", "Đặt câu hỏi đuôi", "Hiểu câu hỏi đuôi"],
            [19, "Chuyên đề 10: Câu hỏi đuôi – Bài tập luyện tập", "Negative & positive tags", "Tag question exceptions", "Viết đoạn hội thoại", "Thực hành câu hỏi đuôi"],
            [20, "Chuyên đề 11: So sánh – Các loại so sánh", "Comparatives, Superlatives", "Comparative structures", "Viết câu so sánh", "Hiểu so sánh"],
            [21, "Chuyên đề 11: So sánh – Bài tập thực hành", "So sánh nâng cao", "Advanced comparisons", "Bài tập nâng cao", "Ứng dụng so sánh nâng cao"],
            [22, "Chuyên đề 12: Trật tự của tính từ – Quy tắc & ví dụ", "Adjective order", "Adjective order rules", "Sắp xếp tính từ", "Hiểu trật tự tính từ"],
            [23, "Chuyên đề 13: Mạo từ – Cách dùng a/an/the", "Articles (a/an/the)", "Article usage rules", "Điền mạo từ đúng", "Sử dụng mạo từ đúng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá năng lực cuối kỳ"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 2 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 2')->first();

        $lessons = [
            [1,  "Chuyên đề 14: Cấu tạo từ – Lý thuyết & ví dụ", "Prefixes, Suffixes", "Word formation rules", "Viết từ mới bằng tiền tố/hậu tố", "Hiểu cấu tạo từ"],
            [2,  "Chuyên đề 14: Cấu tạo từ – Bài tập ứng dụng", "Word formation", "Suffixes & prefixes", "Làm bài tập word formation", "Ứng dụng word formation"],
            [3,  "Chuyên đề 15: Từ chỉ số lượng – Lý thuyết & ví dụ", "Quantifiers, Much/Many", "Quantifier rules", "Điền từ chỉ số lượng", "Hiểu từ chỉ số lượng"],
            [4,  "Chuyên đề 15: Từ chỉ số lượng – Bài tập thực hành", "Few/Little", "Practice with quantifiers", "Viết câu với few/little", "Ứng dụng trong bài tập"],
            [5,  "Chuyên đề 16: Giới từ – Các loại giới từ cơ bản", "Prepositions of place/time", "Preposition usage", "Đặt câu với giới từ", "Hiểu giới từ"],
            [6,  "Chuyên đề 16: Giới từ – Bài tập luyện tập", "Prepositional phrases", "Prepositional structures", "Hoàn thành bài tập giới từ", "Sử dụng giới từ đúng"],
            [7,  "Chuyên đề 17: Liên từ – Lý thuyết & ví dụ", "Conjunctions: and, but, or", "Conjunction rules", "Viết câu với liên từ", "Hiểu liên từ"],
            [8,  "Chuyên đề 17: Liên từ – Bài tập thực hành", "Although, unless", "Advanced conjunctions", "Làm bài tập liên từ", "Sử dụng liên từ đúng"],
            [9,  "Chuyên đề 18: Câu bị động – Các dạng bị động cơ bản", "Passive voice", "Passive voice forms", "Chuyển câu sang bị động", "Hiểu câu bị động"],
            [10, "Chuyên đề 18: Câu bị động – Bài tập ứng dụng", "Advanced passives", "Usage of passives", "Viết đoạn văn bị động", "Ứng dụng bị động"],
            [11, "Chuyên đề 19: Câu điều kiện – Lý thuyết & ví dụ", "Conditionals (0,1,2)", "Conditional sentence rules", "Viết câu điều kiện", "Hiểu câu điều kiện"],
            [12, "Chuyên đề 19: Câu điều kiện – Bài tập luyện tập", "Conditionals (3, mixed)", "Mixed conditionals", "Làm bài tập điều kiện nâng cao", "Ứng dụng điều kiện nâng cao"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Nguyên tắc chuyển đổi", "Direct speech", "Rules for reported speech", "Chuyển câu trực tiếp thành gián tiếp", "Hiểu câu trực tiếp/gián tiếp"],
            [15, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Bài tập ứng dụng", "Indirect speech", "Reported questions & commands", "Bài tập reported speech", "Ứng dụng reported speech"],
            [16, "Chuyên đề 21: Đảo ngữ – Lý thuyết & ví dụ", "Inversion structures", "Inversion rules", "Viết câu đảo ngữ", "Hiểu đảo ngữ"],
            [17, "Chuyên đề 21: Đảo ngữ – Bài tập thực hành", "Negative inversion", "Practice inversion", "Bài tập đảo ngữ", "Ứng dụng đảo ngữ"],
            [18, "Chuyên đề 22: Mệnh đề quan hệ – Lý thuyết & ví dụ", "Relative clauses", "Relative clause rules", "Viết câu với mệnh đề quan hệ", "Hiểu mệnh đề quan hệ"],
            [19, "Chuyên đề 22: Mệnh đề quan hệ – Bài tập ứng dụng", "Defining & non-defining", "Reduced relative clauses", "Bài tập rút gọn mệnh đề quan hệ", "Ứng dụng mệnh đề quan hệ"],
            [20, "Chuyên đề 23: Thành ngữ – Các thành ngữ phổ biến", "Idioms", "Idiomatic usage", "Viết câu với idioms", "Hiểu thành ngữ"],
            [21, "Chuyên đề 23: Thành ngữ – Bài tập luyện tập", "Idiomatic phrases", "Idioms in sentences", "Bài tập idioms", "Ứng dụng thành ngữ"],
            [22, "Chuyên đề 24: Cụm từ cố định – Tổng hợp & bài tập", "Fixed expressions", "Fixed expression rules", "Viết câu với cụm từ cố định", "Hiểu cụm từ cố định"],
            [23, "Chuyên đề 25: Cấu trúc thông dụng – Tổng hợp & bài tập", "Common structures", "Common structures", "Viết đoạn văn dùng cấu trúc thông dụng", "Ứng dụng cấu trúc thông dụng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 3 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 3')->first();

        $lessons_unicollege3 = [
            [1,  "Test 1 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [2,  "Test 1 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [3,  "Test 2 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [4,  "Test 2 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [5,  "Test 3 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [6,  "Test 3 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [7,  "Test 4 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [8,  "Test 4 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [9,  "Test 5 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [10, "Test 5 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [11, "Review Test 1–5", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [12, "Test 6 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 6 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [15, "Test 7 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [16, "Test 7 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [17, "Test 8 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [18, "Test 8 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [19, "Test 9 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [20, "Test 9 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [21, "Test 10 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [22, "Test 10 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [23, "Review Test 6–10", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_unicollege3 as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        //
        $subject = Subject::where('name', 'ICY UNICOLLEGE 4')->first();

        $lessons_unicollege4 = [
            [1,  "Test 11 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [2,  "Test 11 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [3,  "Test 12 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [4,  "Test 12 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [5,  "Test 13 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [6,  "Test 13 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [7,  "Test 14 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [8,  "Test 14 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [9,  "Test 15 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [10, "Test 15 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [11, "Review Test 11–15", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [12, "Test 16 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 16 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [15, "Test 17 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [16, "Test 17 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [17, "Test 18 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [18, "Test 18 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [19, "Test 19 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [20, "Test 19 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [21, "Test 20 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [22, "Test 20 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [23, "Review Test 16–20", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_unicollege4 as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }


        // ========== ICY UNICOLLEGE 5 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 5')->first();

        $lessons_unicollege5 = [
            [1,  "Mock Test 1 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [2,  "Mock Test 1 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [3,  "Mock Test 2 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [4,  "Mock Test 2 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [5,  "Mock Test 3 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [6,  "Mock Test 3 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [7,  "Mock Test 4 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [8,  "Mock Test 4 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [9,  "Mock Test 5 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [10, "Mock Test 5 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [11, "Review Mock Test 1–5", "Review Vocabulary (Mock Test consolidation)", "Review Grammar (Mock Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 Mock Tests"],
            [12, "Mock Test 6 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Mock Test 6 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [15, "Mock Test 7 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [16, "Mock Test 7 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [17, "Mock Test 8 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [18, "Mock Test 8 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [19, "Mock Test 9 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [20, "Mock Test 9 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [21, "Mock Test 10 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [22, "Mock Test 10 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [23, "Review Mock Test 6–10", "Review Vocabulary (Mock Test consolidation)", "Review Grammar (Mock Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 Mock Tests"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_unicollege5 as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 6 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 6')->first();

        $lessons = [
            [1,  "Đề thi thật 2017 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [2,  "Đề thi thật 2017 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [3,  "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [4,  "Đề thi thật 2018 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [5,  "Đề thi thật 2018 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [6,  "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [7,  "Đề thi thật 2019 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [8,  "Đề thi thật 2019 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [9,  "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [10, "Đề thi thật 2020 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [11, "Đề thi thật 2020 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [12, "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Đề thi thật 2021 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [15, "Đề thi thật 2021 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [16, "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [17, "Đề thi thật 2022 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [18, "Đề thi thật 2022 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [19, "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [20, "Đề thi thật 2023 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [21, "Đề thi thật 2023 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [22, "Đề thi thật 2024 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [23, "Đề thi thật 2024 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
    }
}
