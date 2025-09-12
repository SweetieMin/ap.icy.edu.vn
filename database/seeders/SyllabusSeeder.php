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

        
    }
}
