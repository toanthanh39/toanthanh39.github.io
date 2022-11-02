export default function ErrorBoundary({ error, resetErrorBoundary }) {
  return (
    <div className="role_error">
      <p>Some thinh went wrong:</p>
      <pre>{error.message}</pre>
      <button onClick={{ resetErrorBoundary }}></button>
    </div>
  );
}
