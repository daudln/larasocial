<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [

            [
                "title" => "The Art of Front-End Development",
                "content" => "Front-end development is all about creating the user interface...",
                "user_id" => 2
            ],
            [
                "title" => "Mastering SQL Queries",
                "content" => "SQL is a powerful language for managing relational databases...",
                "user_id" => 1
            ],
            [
                "title" => "Building Scalable APIs with Node.js",
                "content" => "Node.js is a versatile runtime that's great for building APIs...",
                "user_id" => 3
            ],
            [
                "title" => "The Importance of Responsive Design",
                "content" => "Responsive design ensures your website looks great on all devices...",
                "user_id" => 2
            ],
            [
                "title" => "Deep Learning with Python and TensorFlow",
                "content" => "TensorFlow is a leading framework for deep learning and AI...",
                "user_id" => 4
            ],
            [
                "title" => "Exploring Vue.js for Front-End Development",
                "content" => "Vue.js is a progressive JavaScript framework for building user interfaces...",
                "user_id" => 3
            ],
            [
                "title" => "Securing Your Web Applications",
                "content" => "Web application security is crucial to protect against attacks...",
                "user_id" => 1
            ],
            [
                "title" => "Getting Started with Docker Containers",
                "content" => "Docker simplifies application deployment and scaling...",
                "user_id" => 4
            ],
            [
                "title" => "The Power of Data Visualization",
                "content" => "Data visualization helps you understand and communicate data...",
                "user_id" => 2
            ], [
                "title" => "Exploring the World of AI Chatbots",
                "content" => "AI chatbots are revolutionizing customer service and automation...",
                "user_id" => 3
            ],
            [
                "title" => "Mastering JavaScript Promises",
                "content" => "Promises in JavaScript are a powerful tool for handling asynchronous operations...",
                "user_id" => 2
            ],
            [
                "title" => "Building RESTful APIs with Express.js",
                "content" => "Express.js is a minimalist Node.js framework for building APIs...",
                "user_id" => 4
            ],
            [
                "title" => "The Future of Web Development",
                "content" => "Web development is constantly evolving with new technologies and trends...",
                "user_id" => 1
            ],
            [
                "title" => "Introduction to Machine Learning Algorithms",
                "content" => "Machine learning algorithms are the heart of AI and data science...",
                "user_id" => 3
            ],
            [
                "title" => "Creating Stunning Visual Effects in CSS",
                "content" => "CSS allows you to add eye-catching visual effects to your web designs...",
                "user_id" => 2
            ],
            [
                "title" => "Database Design Best Practices",
                "content" => "Designing a database properly is crucial for data integrity and performance...",
                "user_id" => 1
            ],
            [
                "title" => "Scaling Your Web Application for High Traffic",
                "content" => "Handling high traffic requires a robust infrastructure and optimization...",
                "user_id" => 4
            ],
            [
                "title" => "The Art of Code Review",
                "content" => "Code reviews are essential for maintaining code quality and collaboration...",
                "user_id" => 2
            ]
        ];
        foreach ($posts as $post) {
            \App\Models\Post::create($post);
        }
    }
}
