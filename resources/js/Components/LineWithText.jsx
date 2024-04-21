export default function LineWithText({text, className = '', ...props }) {
    return (
        <div className={"flex items-center " + className} {...props}>
            <div className="flex-grow border-b-2 border-gray-400"></div>
            <span className="px-4">{text}</span>
            <div className="flex-grow border-b-2 border-gray-400"></div>
        </div>
    );
}
