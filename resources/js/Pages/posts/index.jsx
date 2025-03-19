import React from 'react'

export default function Index({ errors, posts }) {
    console.log(posts);
    return (
        <div className='p-4'>
            <h1 className='text-4xl font-semibold'>All Posts in JSX</h1>
            <div className='grid gap-8'>

            {
                posts.map(post => <h2 key={post.id}>{post.title}</h2>)
            }
            </div>
        </div>
    )
}
