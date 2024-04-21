import { forwardRef, useEffect, useRef } from 'react';

export default forwardRef(function TextInput({ type = 'text', className = '', isFocused = false, ...props }, ref) {
    const input = ref ? ref : useRef();

    useEffect(() => {
        if (isFocused) {
            input.current.focus();
        }
    }, []);

    return (
        <input
            {...props}
            type={type}
            className={
                'border-b-4 border-t-0 border-r-0 border-l-0 bg-transparent border-gray-300 focus:border-gray-400 focus:ring-0 focus:ring-offset-0' +
                className
            }
            ref={input}
        />
    );
});
